<?php 

require_once 'Song.php';

$song = new Song('Yesterday', 100);

// fatal error
// $song->setRating('neither an int nor a float');
// var_dump($song->getRating());

$song->setRating(-3);
var_dump($song->getRating());

$song->setRating(10);
var_dump($song->getRating());

$song->setRating(3.5);
var_dump($song->getRating());