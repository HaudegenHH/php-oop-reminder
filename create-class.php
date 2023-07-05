<?php

class Product 
{
  public $name = 'soap';  
  public $price; # cents

  public function convertPriceToCurrency() 
  {
    $priceAsCurrency = $this->price / 100;
    return $priceAsCurrency;
  }
}

$soapObject = new Product();
$soapObject->price = 500;

print $soapObject->convertPriceToCurrency() . " €";
