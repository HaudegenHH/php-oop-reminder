<?php 

require_once 'Song.php';

$songTitles = ['Yesterday', 'Help!', 'Let it be'];

$song = new Song($songTitles[0], 100);


// $song->name = $songTitles;
// var_dump($song->name);

$song->numOfPlays = 'not an int';
var_dump($song->numOfPlays);