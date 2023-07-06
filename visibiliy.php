<?php

require_once 'BaseClass.php';
require_once 'SubClass.php';

$baseObject = new BaseClass();
$subObject = new SubClass();

// print $baseObject->publicProperty . PHP_EOL;
// print $subObject->publicProperty . PHP_EOL;

// fatal error
// print $baseObject->protectedProperty . PHP_EOL;


// print $baseObject->getProtectedProperty() . PHP_EOL;
// print $subObject->getProtectedProperty() . PHP_EOL;

// print $subObject->getParentProtectedProperty() . PHP_EOL;

// fatal error
// print $baseObject->privateProperty . PHP_EOL;

// print $baseObject->getPrivateProperty() . PHP_EOL;

// fatal error
// print $subObject->getParentPrivateProperty() . PHP_EOL;

// fatal error
// print $baseObject->getProtectedProperty() . PHP_EOL;
// fatal error
// print $subObject->getProtectedProperty() . PHP_EOL;

print $subObject->getParentProtectedProperty() . PHP_EOL;

