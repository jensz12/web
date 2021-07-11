<?php
$status_pondus = json_decode(file_get_contents('https://api.mcsrvstat.us/2/pondus.minecraftserver.dk'));
$status_vercinger = json_decode(file_get_contents('https://api.mcsrvstat.us/2/vercinger.minecraftserver.dk'));
$status_jens = json_decode(file_get_contents('https://api.mcsrvstat.us/2/mc.minecraftserver.dk'));
$status_dsp = json_decode(file_get_contents('https://api.mcsrvstat.us/2/pirater.minecraftserver.dk'));
$status_testserver = json_decode(file_get_contents('https://api.mcsrvstat.us/2/test.minecraftserver.dk'));?>
<!DOCTYPE html>
<html lang="da">
<head>
<meta name="google-site-verification" content="5Nc1koM3FzbiqnNn96XDtqiGPSlMX5c_aZv1oY6HSdg" />
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>MC Server overblik - Jens Møller</title>
<link rel="icon" href="https://jensz12.com/favicon.png">
<meta name="description" content="MC Server overblik - Jens Møller">
<meta name="theme-color" content="#A81010">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@jensz12">
<meta name="twitter:creator" content="@jensz12">
<meta name="twitter:title" content="MC Server overblik - Jens Møller">
<meta name="twitter:description" content="MC Server overblik - Jens Møller">
<meta name="twitter:image:src" content="https://www.gravatar.com/avatar/5ce60652703ef30780a3cbb1c0eb0317?s=2000">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="manifest" href="/manifest.json">
<link rel="image_src" href="https://www.gravatar.com/avatar/5ce60652703ef30780a3cbb1c0eb0317?s=2000">
<link href='https://fonts.googleapis.com/css?family=Roboto:100,300' rel='stylesheet' type='text/css'>
<script src="https://kit.fontawesome.com/1dedeee01c.js" crossorigin="anonymous"></script><style>
body {
	background-image: url(https://design.jensz12.com/images/screen-back.png);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
	background-attachment: fixed;
	height: 100%;
	font-family: 'Roboto', sans-serif;
	padding-top: 35px;
	padding-bottom: 35px;
}
.img {
    margin : 10px;
    margin-bottom: 40px;
}

@media (prefers-color-scheme: light) {

  .card-title, h1, h2, h3, h4, h5, p, b, card-text, a:link, .fa-envelope, a:visited, th, tr {
    color: black;
  }
  .jumbotron, .card {
    background-color: white;
    margin: 30px;
  }
}

@media (prefers-color-scheme: dark) {

  .card-title, h1, h2, h3, h4, h5, p, b, card-text, a:link, .fa-envelope, a:visited, th, tr {
    color: white;
  }
  .jumbotron, .card {
    background-color: #212121;
	margin: 30px;
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
<div class="card-group">
  <div class="card">
    <img src="https://static.jensz12.com/images/pondus.png" class="card-img-top">
    <div class="card-body">
     	<h5 class="card-title">Pondus</h5>
	  	<p>Antal online: <?php echo $status_pondus->players->online;?></p>
		<p>Spillere: <?php
		foreach ($status_pondus->players->list as $player) {
			echo $player.'<br />';
			}
		?></p>
		<p>Software: <?php echo $status_pondus->software;?></p>
		<p>MC Version: <?php echo $status_pondus->version;?></p>
    </div>
  </div>
  <div class="card">
    <img src="https://vercinger.dk/favicon.svg" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">Vercinger</h5>
	  <p>Antal online: <?php echo $status_vercinger->players->online;?></p>
		<p>Software: <?php echo $status_vercinger->software;?></p>
		<p>MC Version: <?php echo $status_vercinger->version;?></p>
		</div>
  </div>
  <div class="card">
    <img src="https://static.jensz12.com/images/command.PNG" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">Jens' Server</h5>
	  <p>Antal online: <?php echo $status_jens->players->online;?></p>
		<p>Spillere: <?php
		foreach ($status_jens->players->list as $player) {
			echo $player.'<br />';
			}
		?></p>
		<p>Software: <?php echo $status_jens->software;?></p>
		<p>MC Version: <?php echo $status_jens->version;?></p>
    </div>
  </div>
</div>
<div class="card-group">
  <div class="card">
    <img src="https://static.jensz12.com/images/dsp.png" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">De Søsyge Pirater</h5>
	  <p>Antal online: <?php echo $status_dsp->players->online;?></p>
		<p>Spillere: <?php
		foreach ($status_dsp->players->list as $player) {
			echo $player.'<br />';
			}
		?></p>
		<p>Software: <?php echo $status_dsp->software;?></p>
		<p>MC Version: <?php echo $status_dsp->version;?></p>
	</div>
  </div>
  <div class="card">
    <img src="https://static.jensz12.com/images/command.PNG" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">Jens' Test Server</h5>
	  <p>Antal online: <?php echo $status_testserver->players->online;?></p>
		<p>Spillere: <?php
		foreach ($status_testserver->players->list as $player) {
			echo $player.'<br />';
			}
		?></p>
		<p>Software: <?php echo $status_testserver->software;?></p>
		<p>MC Version: <?php echo $status_testserver->version;?></p>
    </div>
  </div>
  <!--<div class="card">
    <img src="https://static.jensz12.com/snapchat/spirit55555.svg" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">Spirit55555</h5>
	  <a class="btn btn-primary" href="https://www.snapchat.com/unlock/?type=SNAPCODE&uuid=8f8993eb36e043c98dfdfe07485c36bf&metadata=01" role="button"><i class="fab fa-snapchat"></i> Åben i Snapchat</a>
    </div>
  </div>-->
</div>
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
