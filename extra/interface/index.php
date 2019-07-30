<?php

require_once 'CarProduct.php';
require_once 'LamborghiniVeneno.php';

$lambo = new \InterfaceTutorial\LamborghiniVeneno();
$lambo->accelerate();
$lambo->brake();
$lambo->shiftGear();