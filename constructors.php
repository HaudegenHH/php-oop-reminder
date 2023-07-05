<?php

class Product 
{

  public function __construct(
      public $name = 'soap', 
      public $price = 10
  ) {}    

  public function priceAsCurrency($divisor = 1, $currencySymbol = '€') 
  {
    $priceAsCurrency = $this->price / $divisor;

    return $currencySymbol . $priceAsCurrency;
  }
}

$product = new Product(price: 5);
var_dump($product);
