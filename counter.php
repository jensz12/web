<!DOCTYPE html>
<html lang="da-DK">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Counter</title>
<link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
<style>
body {
	font-family: 'Roboto', sans-serif;
}
</style>
</head>
<body>
<h1 style="font-size:100px" id="countdown"></h1>

<script>
	var countDownDate = new Date("Jul 24, 2020 21:00:00").getTime();
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
        document.getElementById("countdown").innerHTML = "STREAM TID!";
    }
}, 1000);
</script>
</body>
</html>