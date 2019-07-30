<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'BookPrototype.php';
require_once 'PhpBookPrototype.php';

$buyers = [ 'Alan', 'Bruce', 'Chloe' ];

$phpBook = new \Prototype\PhpBookPrototype();
$phpBook->setTitle('Design Patterns');
echo $phpBook->getTitle();

$books = [];
foreach ($buyers as $buyerName) {
    $buyerBook = clone $phpBook;
    $buyerBook->setWriterName($buyerName);

    $books[] = $buyerBook;
}

print_r($books);