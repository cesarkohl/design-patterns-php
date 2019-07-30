<?php

require_once 'autoloader.php';

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