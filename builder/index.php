<?php

require_once 'autoloader.php';

$rocket = new \Builder\RocketProduct();
$rocket->setModel('Test')
    ->setSeatAmount(2)
    ->setMotorAmount(5)
    ->setFuelTank(500);

echo $rocket;
echo "\n";

///

$builderRocketI  = new \Builder\FactoryRocketDirector(new \Builder\RocketModelIBuilder());
$builderRocketII = new \Builder\FactoryRocketDirector(new \Builder\RocketModelIIBuilder());

$builderRocketI->buildRocket();
echo $builderRocketI->getRocket();
echo "\n";

$builderRocketII->buildRocket();
echo $builderRocketII->getRocket();
echo "\n";
