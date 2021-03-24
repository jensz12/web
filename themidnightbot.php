<!DOCTYPE html>
<html lang="da">
<head>
<meta name="google-site-verification" content="5Nc1koM3FzbiqnNn96XDtqiGPSlMX5c_aZv1oY6HSdg" />
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>The Midnight Lyrics Bot - Jens Møller</title>
<link rel="icon" href="https://jensz12.com/favicon.png">
<meta name="description" content="The Midnight Lyrics Bot - Jens Møller">
<meta name="theme-color" content="#A81010">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@jensz12">
<meta name="twitter:creator" content="@jensz12">
<meta name="twitter:title" content="The Midnight Lyrics Bot - Jens Møller">
<meta name="twitter:description" content="The Midnight Lyrics Bot - Jens Møller">
<meta name="twitter:image:src" content="https://static.jensz12.com/images/avatar.jpg">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="manifest" href="/manifest.json">
<link rel="image_src" href="https://static.jensz12.com/images/avatar.jpg">
<link href='https://fonts.googleapis.com/css?family=Roboto:100,300' rel='stylesheet' type='text/css'>
<script src="https://kit.fontawesome.com/1dedeee01c.js" crossorigin="anonymous"></script>
<style>
body {
	background-image: url(https://design.jensz12.com/images/screen-back.png);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
	background-attachment: fixed;
	height: 100%;
	font-family: 'Roboto', sans-serif;
	padding-top: 35px;
}
.fa-heart {
	color: #A81010;
 margin-top: 10px;
}
.fa-twitter {
  color: #1DA1F2;
  margin: 5px;
  }
.fa-discord {
  color: #7289DA;
  margin: 5px;
}
.fa-instagram {
  color: #E1306C;
  margin: 5px;
}
.fa-snapchat {
  color: #FFFC00;
  margin: 5px;
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
    margin-bottom: 30px;
    margin-top: 30px;
  }
    .fa-github {
    color: black;
    margin: 5px;
}

}

@media (prefers-color-scheme: dark) {

  .card-title, h1, h2, h3, h4, h5, p, b, card-text, a:link, .fa-envelope, a:visited, th, tr {
    color: white;
  }
  .jumbotron, .card {
    background-color: #212121;
    margin-bottom: 30px;
    margin-top: 30px;
  }
  .fa-github {
  color: white;
  margin: 5px;
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
      		<div class="jumbotron">
				<div class="text-center">
					<img src="https://static.jensz12.com/images/avatar.jpg" class="img-fluid center-block" alt="logo" width="400px">
					<h1 class="display-4">Hi, im a bot, that just tweets random quotes, from <a href="https://twitter.com/TheMidnightLA">The Midnight</a> lyrics</h1>
					<p>Im built by <a href="https://twitter.com/jules_lax">Julia Lax</a>, and run by <a href="https://twitter.com/jensz12">Jens</a></p>
				</div>
			</div>
			<div class="jumbotron">
			<h1 class="display-4">Tweets</h1>
			<a class="twitter-timeline" data-chrome="transparent noheader nofooter noborders noscrollbar" data-theme="dark" href="https://twitter.com/TheMidnightLyri?ref_src=twsrc%5Etfw">Tweets by TheMidnightLyri</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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
