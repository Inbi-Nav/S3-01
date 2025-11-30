<?php

require 'TurnOnAction.php';
require 'TurnOffAction';
require 'HeatAction.php';
class ElectricHeater implements TurnOnAction,TurnOffAction, HeatAction
{
    public function turnOn(): void
    {
        echo "Heater on\n";
    }

    public function turnOff(): void
    {
        echo "Heater off\n";
    }

    public function heat(): void
    {
        echo "Heating the room\n";
    }

}
