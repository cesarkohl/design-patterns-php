<?php

require_once 'autoloader.php';

$mage = new Decorator\Mage();
$mage = new \Decorator\FireRing($mage);
$mage = new \Decorator\FireRing($mage);
$mage = new \Decorator\ForceNecklace($mage);
$mage = new \Decorator\MagicSword($mage);

echo $mage->getName();
echo "\n";

echo $mage->getAttack();
echo "\n";
