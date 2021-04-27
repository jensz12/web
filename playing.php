<?php
$playing = json_decode(file_get_contents('https://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=Jensz12&api_key=11e147d14d9a0d1ee6b9acf247e742a0&limit=1&format=json'), true);
$playing_now = $playing['recenttracks']['track'][0]['artist']['#text'].' - '.$playing['recenttracks']['track'][0]['name'];
?>
<?php echo $playing_now; ?>
