<?php

require_once 'PhysicalBook.php';
require_once 'DigitalBook.php';

$physicalBook = new PhysicalBook('A random book', 'Jane Doe', 2000, 2000);
$digitalBook = new DigitalBook('A random book', 'Jane Doe', 2000, 1000);

// print $physicalBook->getTitle() . PHP_EOL;

print $physicalBook->print() . PHP_EOL;
print $physicalBook->getPriceAsCurrency() . PHP_EOL;


print $digitalBook->print() . PHP_EOL;
print $digitalBook->getPriceAsCurrency() . PHP_EOL;
