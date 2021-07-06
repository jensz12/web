<!DOCTYPE html>
<html lang="da">
<head>
<meta name="google-site-verification" content="5Nc1koM3FzbiqnNn96XDtqiGPSlMX5c_aZv1oY6HSdg" />
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Counter - Jens Møller</title>
<link rel="icon" href="https://jensz12.com/favicon.png">
<meta name="description" content="Counter - Jens Møller">
<meta name="theme-color" content="#A81010">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@jensz12">
<meta name="twitter:creator" content="@jensz12">
<meta name="twitter:title" content="Counter - Jens Møller">
<meta name="twitter:description" content="Counter - Jens Møller">
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
}
.fa-heart {
	color: #A81010;
 	margin-top: 10px;
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
}
</style>
</head>
<body>
<div class="container">
  	<div class="row">
    	<div class="col-lg-12 col-md-12">
      		<div class="jumbotron">
    			<h1 class="display-4 text-center">Countdown til Jens er i København</h1>
				<h1 class="display-1 text-center" id="countdown"></h1>
				<h3 class="text-center"><a href="/party"><i class="fas fa-heart"></i></a></h3>
        	</div>
    	</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script>
	var countDownDate = new Date("June 30, 2021 09:00:00").getTime();
	var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    document.getElementById("countdown").innerHTML = days + "d " + hours + "t "
    + minutes + "m " + seconds + "s ";
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "Hej Liva 🥰";
    }
}, 1000);
</script>
</body>
</html>
