<?php

require_once 'Playlist.php';
require_once 'Song.php';

$playlist = new Playlist();

$song1 = new Song('Scarborough Fair', 100);
$song2 = new Song('Bridge over troubled water', 200);

$playlist->addSong($song1);
$playlist->addSong($song2);

if ($playlist->getLength() < 10) {
  print "short playlist..." . PHP_EOL;
}
