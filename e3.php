<!DOCTYPE html>
<html lang="da-DK">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>E3 2021 - Jens Møller</title>
<link rel="icon" href="https://design.jensz12.com/images/e3.png">
<meta name="description" content="Electronic Entertainment Expo, E3 eller E³ er en årlig underholdningsmesse primært tiltænkt præsentation af fremtidige udgivelser indenfor computerspil og konsolspil">
<meta name="theme-color" content="#A81010">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@jensz12">
<meta name="twitter:creator" content="@jensz12">
<meta name="twitter:title" content="E3 2021 - Jens Møller">
<meta name="twitter:description" content="Electronic Entertainment Expo, E3 eller E³ er en årlig underholdningsmesse primært tiltænkt præsentation af fremtidige udgivelser indenfor computerspil og konsolspil">
<meta name="twitter:image:src" content="https://design.jensz12.com/images/e3-2019.jpg">>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="manifest" href="/manifest.json">
<link rel="image_src" href="https://www.gravatar.com/avatar/5ce60652703ef30780a3cbb1c0eb0317?s=2000">
<script src="https://kit.fontawesome.com/1dedeee01c.js" crossorigin="anonymous"></script>
<link href='https://fonts.googleapis.com/css?family=Roboto:100,300' rel='stylesheet' type='text/css'>
<style>
body {
	background-image: url(https://design.jensz12.com/images/e3-2019.jpg);
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
h1 {
  text-align: center;
  margin-top:0px;
}

@media (prefers-color-scheme: light) {

  .card-title, h1, h2, p, b, card-text, a:link, a:visited, th, tr {
    color: black;
  }
  .jumbotron, .card {
    background-color: white;
    margin-bottom: 30px;
    margin-top: 30px;
  }

}

@media (prefers-color-scheme: dark) {

  .card-title, h1, h2, p, b, card-text, a:link, a:visited, th, tr {
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
<main role="main" id="content" class="container">
	<div class="row">
		<article class="col-lg-12 col-md-12">
			<div class="jumbotron">
				<h1> E3 2021 starter om:</h1>
				<h1 id="countdown"></h1>
			</div>
			<div class="jumbotron">
				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Publisher</th>
								<th>Dato</th>
								<th>Klokkeslæt</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href="#">EA</a></td>
								<td>TBA</td>
								<td>TBA</td>
							</tr>
							<tr>
								<td><a href="#">Microsoft</a></td>
								<td>TBA</td>
								<td>TBA</td>
							</tr>
							<tr>
								<td><a href="#">Bethesda</a></td>
								<td>TBA</td>
								<td>TBA</td>
							</tr>
							<tr>
								<td><a href="#">PC Gamer Show</a></td>
								<td>TBA</td>
								<td>TBA</td>
							</tr>
							<tr>
								<td><a href="#">Ubisoft</a></td>
								<td>TBA</td>
								<td>TBA</td>
							</tr>
							<tr>
								<td><a href="#">Square Enix</a></td>
								<td>TBA</td>
								<td>TBA</td>
							</tr>
							<tr>
								<td><a href="#">Sony</a></td>
								<td>TBA</td>
								<td>TBA</td>
							</tr>
							<tr>
								<td><a href="#">Nintendo</a></td>
								<td>TBA</td>
								<td>TBA</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="jumbotron">
				 <div id="twitch-embed"></div>
					 <script src="https://embed.twitch.tv/embed/v1.js"></script>
				     <script type="text/javascript">
							new Twitch.Embed("twitch-embed", {
							width: "100%",
							height: 500,
							theme: "dark",
							channel: "jensz12"
							});
					</script>
				</div>
			</div>
		</article>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<script>
	var countDownDate = new Date("Jun 15, 2021 22:00:00").getTime();
	var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "E3 er i gang";
    }
	}, 1000);
	</script>
</body>
</html>
