<?php
$status_pondus = json_decode(file_get_contents('https://api.mcsrvstat.us/2/pondus.minecraftserver.dk'));
$status_vercinger = json_decode(file_get_contents('https://api.mcsrvstat.us/2/vercinger.minecraftserver.dk'));
$status_jens = json_decode(file_get_contents('https://api.mcsrvstat.us/2/mc.minecraftserver.dk'));
$status_dsp = json_decode(file_get_contents('https://api.mcsrvstat.us/2/pirater.minecraftserver.dk'));
$status_testserver = json_decode(file_get_contents('https://api.mcsrvstat.us/2/test.minecraftserver.dk'));
?>
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
</div>
