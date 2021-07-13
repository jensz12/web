<div class="jumbotron">
    <h1 class="display-4 text-center">Countdown</h1>
	<h1 class="display-1 text-center" id="countdown"></h1>
	<h3 class="text-center"><a href="/party"><i class="fas fa-heart"></i></a></h3>
</div>
<script>
	var countDownDate = new Date("July 23, 2021 09:00:00").getTime();
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
        document.getElementById("countdown").innerHTML = "lol";
    }
}, 1000);
</script>
