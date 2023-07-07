<?php 

require_once 'Counter.php';
require_once 'Connection.php';


// print Counter::$count . PHP_EOL;

// Counter::$count++;
// print Counter::$count . PHP_EOL;


$connection1 = new Connection();
print Connection::$count . PHP_EOL;

$connection2 = new Connection();
print Connection::$count . PHP_EOL;

Connection::$count += 20;
print Connection::$count . PHP_EOL;
