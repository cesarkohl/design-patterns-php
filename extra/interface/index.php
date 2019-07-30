<?php

spl_autoload_register(function($className) {
    include_once explode('\\', $className)[1] . '.php';
});

$lambo = new \InterfaceTutorial\LamborghiniVeneno();
$lambo->accelerate();
$lambo->brake();
$lambo->shiftGear();