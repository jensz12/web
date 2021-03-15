const cacheName = 'jensz12.com-cache';
const startPage = 'https://jensz12.com';
const filesToCache = [
	'/favicon.png',
	'/favicon.ico',
	'/static/design/images/e3-2019.jpg',
	'/static/design/images/screen-back.png',
	'/static/images/kaj.png',
	'/offline.php'
];

// Install
self.addEventListener('install', function (e) {
	console.log('Jensz12 service worker installation');
	e.waitUntil(
		caches.open(cacheName).then(function (cache) {
			console.log('Jensz12 service worker caching dependencies');
			filesToCache.map(function (url) {
				return cache.add(url).catch(function (reason) {
					return console.log('Jensz12: ' + String(reason) + ' ' + url);
				});
			});
		})
	);
});

// Activate
self.addEventListener('activate', function (e) {
	console.log('Jensz12 service worker activation');
	e.waitUntil(
		caches.keys().then(function (keyList) {
			return Promise.all(keyList.map(function (key) {
				if (key !== cacheName) {
					console.log('Jensz12 old cache removed', key);
					return caches.delete(key);
				}
			}));
		})
	);
	return self.clients.claim();
});

// Fetch
self.addEventListener('fetch', function (e) {

	// Return if request url protocal isn't http or https
	if (!e.request.url.match(/^(http|https):\/\//i))
		return;

	// Return if request url is from an external domain.
	if (new URL(e.request.url).origin !== location.origin)
		return;

	// For POST requests, do not use the cache. Serve offline page if offline.
	if (e.request.method !== 'GET') {
		e.respondWith(
			fetch(e.request).catch(function () {
				return caches.match(offlinePage);
			})
		);
		return;
	}

	// Revving strategy
	if (e.request.mode === 'navigate' && navigator.onLine) {
		e.respondWith(
			fetch(e.request).then(function (response) {
				return caches.open(cacheName).then(function (cache) {
					cache.put(e.request, response.clone());
					return response;
				});
			})
		);
		return;
	}

	e.respondWith(
		caches.match(e.request).then(function (response) {
			return response || fetch(e.request).then(function (response) {
				return caches.open(cacheName).then(function (cache) {
					cache.put(e.request, response.clone());
					return response;
				});
			});
		}).catch(function () {
			return caches.match(offlinePage);
		})
	);
});

const OFFLINE_VERSION = 1;
const CACHE_NAME = "offline-only";
// Customize this with a different URL if needed.
const OFFLINE_URL = "offline.php";

self.addEventListener("install", (event) => {
	event.waitUntil(
		(async () => {
			const cache = await caches.open(CACHE_NAME);
			// Setting {cache: 'reload'} in the new request will ensure that the
			// response isn't fulfilled from the HTTP cache; i.e., it will be from
			// the network.
			await cache.add(new Request(OFFLINE_URL, { cache: "reload" }));
		})()
	);
	// Force the waiting service worker to become the active service worker.
	self.skipWaiting();
});

self.addEventListener("activate", (event) => {
	event.waitUntil(
		(async () => {
			// Enable navigation preload if it's supported.
			// See https://developers.google.com/web/updates/2017/02/navigation-preload
			if ("navigationPreload" in self.registration) {
				await self.registration.navigationPreload.enable();
			}
		})()
	);

	self.clients.claim();
});

self.addEventListener("fetch", (event) => {
	if (event.request.mode === "navigate") {
		event.respondWith(
			(async () => {
				try {
					const preloadResponse = await event.preloadResponse;
					if (preloadResponse) {
						return preloadResponse;
					}
					const networkResponse = await fetch(event.request);
					return networkResponse;
				} catch (error) {
					console.log("Fetch failed; returning offline page instead.", error);

					const cache = await caches.open(CACHE_NAME);
					const cachedResponse = await cache.match(OFFLINE_URL);
					return cachedResponse;
				}
			})()
		);
	}

});
