<?php

require_once 'autoloader.php';

$taxesFood = new \TemplateMethod\TaxesFood();
$taxesClothing = new \TemplateMethod\TaxesClothing();
$taxesElectric = new \TemplateMethod\TaxesElectric();

echo "Food final price:". $taxesFood->calculateProductTaxes(10);
echo "\n";

echo "Clothing final price:". $taxesClothing->calculateProductTaxes(10);
echo "\n";

echo "Electric final price:". $taxesElectric->calculateProductTaxes(10);
echo "\n";