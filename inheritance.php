<?php

require_once 'Book.php';

$physicalBook = new Book('A random Book', 'Jane Doe', 2000, 'physical');
$digitalBook = new Book('A random Book', 'Jane Doe', 2000, 'digital');


print $physicalBook->print() . PHP_EOL;
print $digitalBook->print() . PHP_EOL;
