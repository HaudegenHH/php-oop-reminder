<?php

require_once 'Book.php';

class PhysicalBook extends Book
{
  public $weight;

  public function __construct(
  	string $title, 
  	string $author, 
  	int $price,
  	int $weight = 0, 
  ) 
  {
  	parent::__construct($title, $author, $price);
    $this->weight = $weight;    
  }
 
  public function getWeight(): int
  {
    return $this->weight;
  }

  public function print(): string {
  	return parent::print() . ", Weight: {$this->weight}g";
  }

}
