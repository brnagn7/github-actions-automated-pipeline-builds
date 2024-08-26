<?php

require_once 'PhysicalBook.php';
require_once 'DigitalBook.php';

$book = new Book('Random', 'Jane', 999);
print $book->print() . PHP_EOL;

//$physicalBook = new PhysicalBook('A Random Physical Book', 'Jane Doe', 2000, 300);
//$digitalBook = new DigitalBook('A Random Digital Book', 'Fred Doe', 500, 1024);
//
//print $physicalBook->print() . PHP_EOL;
//print $digitalBook->print() . PHP_EOL;