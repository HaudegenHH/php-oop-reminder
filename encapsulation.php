<?php

require_once 'Playlist.php';
require_once 'Song.php';

$beatlesSongs = new Playlist();

$song = new Song('Yesterday', 100);

$fakeSong = 'This is not a song, it just a string';

// $beatlesSongs->songs[] = $song;
// $beatlesSongs->songs[] = $fakeSong;
// var_dump($beatlesSongs->songs);

// fatal error
// $beatlesSongs->addSong($fakeSong);

$beatlesSongs->addSong($song);
var_dump($beatlesSongs->getSongs());

