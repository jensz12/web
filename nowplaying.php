<?php
$artwork = file_get_contents('https://jensz12.com/artwork.php');
$playing = file_get_contents('https://jensz12.com/playing.php');
?>
<!DOCTYPE html>
<html lang="da">
<head>
<meta name="charset" content="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Now Playing - Jens Møller</title>
<meta name="description" content="Now Playing ">
<link rel="icon" href="https://jensz12.com/favicon.png">
<meta name="theme-color" content="#A81010">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@jensz12">
<meta name="twitter:creator" content="@jensz12">
<meta name="twitter:title" content="Now Playing ">
<meta name="twitter:description" content="Now Playing ">
<meta name="twitter:image:src" content="https://www.gravatar.com/avatar/5ce60652703ef30780a3cbb1c0eb0317?s=2000">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="image_src" href="/https://www.gravatar.com/avatar/5ce60652703ef30780a3cbb1c0eb0317?s=2000">
<link href='https://fonts.googleapis.com/css?family=Roboto:100,300' rel='stylesheet' type='text/css'>
<style>
body {
	height: 100%;
	font-family: 'Roboto', sans-serif;
	padding-top: 100px;
}
.card-title, h1, h2, h3, h4, h5, p, b, card-text {
  color: white;
}.card {
  background-color: #212121;
  margin-bottom: 20px;
  margin-top: 20px;
}
</style>
</head>
<body>
<main role="main" id="content" class="container">
	<div class="row justify-content-md-center">
		<article class="col-lg-6 col-md-8 col-sm-12">
			<div class="card">
			<span id="artwork"></span>
			<div class="card-body">
			<h1 class="text-center"><span id="playing"></span></h1>
			</div>
			</div>
		</article>
	</div>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script>
$(function () { $('[data-toggle="tooltip"]').tooltip() })
function worker(){
	$.ajaxSetup ({
		cache: false
	});
	$("#artwork").load('artwork.php');
	$("#playing").load('playing.php');
}
$(function(){
	worker();
	setInterval(worker, 3000);
});
</script>
</body>
</html>
