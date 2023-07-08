<?php

require_once 'Book.php';

// class PhysicalBook extends Book
// {
//   public $weight;

//   public function __construct(
//   	string $title, 
//   	string $author, 
//   	int $price,
//   	int $weight = 0, 
//   ) 
//   {
//   	parent::__construct($title, $author, $price);
//     $this->weight = $weight;    
//   }
 
//   public function getWeight(): int
//   {
//     return $this->weight;
//   }

//   public function print(): string {
//   	return parent::print() . ", Weight: {$this->weight}g";
//   }

// }

class PhysicalBook extends Book
{  

  public function __construct(
    string $title, 
    int $weight = 0, 
  ) 
  {
    parent::__construct($title);
    $this->weight = $weight;    
  }
 
  public function getWeight(): int
  {
    return $this->weight;
  }

  public function write(): string
  {
    $weightInKg = $this->weight / 1000;    
    return "Title: {$this->title}, Weight: {$weightInKg}kg"; 
  }
}