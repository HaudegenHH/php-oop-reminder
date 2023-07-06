<?php

class Song 
{
  public $name;
  public $numOfPlays; # how often has this song been played

  public function __construct(string $name, int $numOfPlays)
  {
    $this->name = $name;
    $this->numOfPlays = $numOfPlays; 	
  }
}


