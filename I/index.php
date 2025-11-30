<?php

require_once 'classes/ElectricHeater.php';
require_once 'classes/WashingMachine.php';

$heater = new ElectricHeater();
$washer = new WashingMachine();

$heater->turnOn();
$heater->heat();
$heater->turnOff();
echo "\n";

$washer->turnOn();
$washer->wash();
$washer->turnOff();

?>
