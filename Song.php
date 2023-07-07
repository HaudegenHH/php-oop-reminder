<?php

class Song 
{
  public string $name;
  public int $numOfPlays; # how often has this song been played

  /**
   * song rating from 0 to 5 
   * half ratings allowed e.g. 3.5
   * @var int|float
   */
  private int|float $rating;

  public function __construct(string $name, int $numOfPlays)
  {
    $this->name = $name;
    $this->numOfPlays = $numOfPlays; 	
  }

  public function getRating(): int|float
  {
  	return $this->rating;
  }


  public function setRating(int|float $rating): void
  {
  	// if($rating < 0) {
  	// 	$this->rating = 0;
  	// } elseif ($rating > 5) {
  	// 	$this->rating = 5;
  	// } else {
  	// 	$this->rating = $rating;
  	// }

  	// or in short:
  	$rating = max(0, $rating);
  	$this->rating = min(5, $rating);
  }

}


