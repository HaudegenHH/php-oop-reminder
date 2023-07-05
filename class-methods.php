<?php

class Product 
{
  public $name = 'soap';  
  public $price = 100;

  public function priceAsCurrency($divisor = 1, $currencySymbol = '€') 
  {
    $priceAsCurrency = $this->price / $divisor;

    return $currencySymbol . $priceAsCurrency;
  }
}

$product = new Product();
print $product->priceAsCurrency(currencySymbol: '$') . PHP_EOL;
