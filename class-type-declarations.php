<?php

require_once 'Song.php';
require_once 'Playlist.php';

$playlist = new Playlist();

$song1 = new Song('Scarborough Fair', 100);
$song2 = new Song('Bridge over troubled water', 200);

$playlist->addSong($song1);
$playlist->addSong($song2);

// echo "<pre>";
// print_r($playlist);
// echo "</pre>";

foreach($playlist->songs as $song) {
	print $song->name . PHP_EOL;
}


