<?php 

require_once 'Book.php';
require_once 'PhysicalBook.php';

// fatal error
// $book = new Book();


$book = new PhysicalBook('Lord of the rings', 500);
// print $book->getTitle();


print $book->write();