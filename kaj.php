<!DOCTYPE html>
<html lang="da">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Kaj - Jens Møller</title>
<link rel="icon" href="https://jensz12.com/favicon.png">
<meta name="description" content="Kaj - Jens Møller">
<meta name="theme-color" content="#A81010">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@jensz12">
<meta name="twitter:creator" content="@jensz12">
<meta name="twitter:title" content="Kaj - Jens Møller">
<meta name="twitter:description" content="Kaj - Jens Møller">
<meta name="twitter:image:src" content="https://www.gravatar.com/avatar/5ce60652703ef30780a3cbb1c0eb0317?s=2000">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="manifest" href="/manifest.json">
<link rel="image_src" href="/https://www.gravatar.com/avatar/5ce60652703ef30780a3cbb1c0eb0317?s=2000">
<style>
body {
	background-image: url(https://design.jensz12.com/images/screen-back.png);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
	background-attachment: fixed;
	height: 100%;
	font-family: 'Roboto', sans-serif;
	padding-top: 70px;
}
a:link, a:visited {
	color: rgb(102, 102, 102);
	text-decoration: none;
}
a:hover, a:active {
	text-decoration: underline;
}
.player {
    margin-top: 2px;
    margin-bottom: 2px;
    margin-right: 2px;
    margin-left: 2px;
}
.fa-heart {
	color: #A81010;
}
.fa-envelope {
  color: black;
}
img {
	width: 500px;
	margin: 50px auto 0;
	display: block;
	max-width: 100%;
	-webkit-animation: kaj 1s infinite;
	animation-name: kaj;
	animation-duration: 1s;
	animation-iteration-count: infinite;
}

@-webkit-keyframes kaj {
	from {
		-webkit-transform: rotate(0turn);
		transform: rotate(0turn);
	}

	to {
		-webkit-transform: rotate(1turn);
		transform: rotate(1turn);
	}
}

@-moz-keyframes kaj {
	from {
		-moz-transform: rotate(0turn);
		transform: rotate(0turn);
	}

	to {
		-moz-transform: rotate(1turn);
		transform: rotate(1turn);
	}
}

@keyframes kaj {
	from {
		transform: rotate(0turn);
	}

	to {
		transform: rotate(1turn);
	}
}

</style>
<script>
	if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('/sw.js').then(function(registration) {
      // Registration was successful
      console.log('ServiceWorker registration successful with scope: ', registration.scope);
    }).catch(function(err) {
      // registration failed :(
      console.log('ServiceWorker registration failed: ', err);
    });
  });
}
</script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12">
    <img src="https://static.jensz12.com/images/kvark.png">
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script>
$(function () {
$('[data-toggle="tooltip"]').tooltip()
})
</script>
</body>
</html>
