<?php

require_once 'autoloader.php';

$text = new \Memento\Text();
$text->writeText('A');
$text->writeText('B');
$text->writeText('C');

echo $text->returnText();
echo "\n";

$text->undoWrite();
echo $text->returnText();
echo "\n";