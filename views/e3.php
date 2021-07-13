<div class="jumbotron">
	<div class="text-center">
		<img src="https://design.jensz12.com/images/E32022.png" class="img-fluid center-block" alt="E3" width="400px">
	</div>
	<h1 class="text-center">Starter om:</h1>
	<h1 class="text-center" id="countdown"></h1>
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
					<td>Microsoft & Bethesda</td>
					<td>TBA</td>
					<td>TBA</td>
				</tr>
				<tr>
					<td>PC Gamer Show</td>
					<td>TBA</td>
					<td>TBA</td>
				</tr>
				<tr>
					<td>Future Games Show</td>
					<td>TBA</td>
					<td>TBA</td>
				</tr>
				<tr>
					<td>Ubisoft</td>
					<td>TBA</td>
					<td>TBA</td>
				</tr>
				<tr>
					<td>Nintendo</td>
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
<script>
var countDownDate = new Date("Jun 10, 2022 21:00:00").getTime();
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
