<?php
require 'vendor/autoload.php';
$klein = new \Klein\Klein();

$klein->respond(function($request, $response, $service) {
	$service->layout('views/main.php');
});

$klein->respond('GET', '/', function($request, $response, $service) {
  $service->title = 'Forside';
  $service->description = 'Forside';
	$service->render('views/front.php');
});

$klein->respond('GET', '/art', function($request, $response, $service) {
	$service->title = 'Stream art';
	$service->description = 'Stream kunst';
	  $service->render('views/art.php');
});

$klein->respond('GET', '/countdown', function($request, $response, $service) {
	$service->title = 'Countdown';
	$service->description = 'Nedtælling';
	  $service->render('views/countdown.php');
});

$klein->respond('GET', '/kaj', function($request, $response, $service) {
	$service->title = 'Kaj';
	$service->description = 'ALL HAIL THE MIGHTY KAJ';
	  $service->render('views/kaj.php');
});

$klein->respond('GET', '/party', function($request, $response, $service) {
	$service->title = 'Party Parrot';
	$service->description = 'THE PARROT INSISTS';
	  $service->render('views/party.php');
});

$klein->respond('GET', '/server', function($request, $response, $service) {
	$service->title = 'Minecraft server oversigt';
	$service->description = 'Oversigt over Jens\' Minecraft Servere';
	  $service->render('views/server.php');
});

$klein->respond('GET', '/snapchat', function($request, $response, $service) {
	$service->title = 'Snapchat AR Filtre';
	$service->description = 'Snapchat AR Filtre';
	  $service->render('views/snapchat.php');
});

$klein->respond('GET', '/hash', function($request, $response, $service) {
	$service->title = 'MD5 Hash';
	$service->description = 'MD5 Hash';
	  $service->render('views/hash.php');
});

$klein->respond('GET', '/e3', function($request, $response, $service) {
	$service->title = 'E3 2022';
	$service->description = 'Electronic Entertainment Expo, E3 eller E³ er en årlig underholdningsmesse primært tiltænkt præsentation af fremtidige udgivelser indenfor computerspil og konsolspil';
	  $service->render('views/e3.php');
});

$klein->onHttpError(function ($code, $router) {
	if ($code == 404) {
		$service = $router->service();
		$service->title = '404 - Siden blev ikke fundet';
		$service->description = 'Woops siden blev ikke fundet';
		$service->render('views/404.php');
  }
});


$klein->dispatch();
?>
