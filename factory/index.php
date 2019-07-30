<?php

require('autoloader.php');

$teslaFactory = new TeslaFactory();
$dodgeFactory = new DodgeFactory();

try {

    $teslaModelS    = $teslaFactory->createCar('model_s');
    $teslaModelX    = $teslaFactory->createCar('model_x');

    $dodgeCharger   = $dodgeFactory->createCar('charger');
    $dodgeDart      = $dodgeFactory->createCar('dart');

} catch (Exception $e) {
    echo $e->getMessage();
}

$teslaModelS->accelerate();
$teslaModelS->brake();
$teslaModelS->shiftGear();
echo "\n";

$teslaModelX->accelerate();
$teslaModelX->brake();
$teslaModelX->shiftGear();
echo "\n";

$dodgeCharger->accelerate();
$dodgeCharger->brake();
$dodgeCharger->shiftGear();
echo "\n";

$dodgeDart->accelerate();
$dodgeDart->brake();
$dodgeDart->shiftGear();
echo "\n";
