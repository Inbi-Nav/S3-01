<?php

require 'TurnOnAction.php';
require 'TurnOffAction.php';
require 'WashAction.php';


class WashingMachine implements TurnOnAction, TurnOffAction, WashAction
{
    public function turnOn(): void
    {
        echo "Washing machine on\n";
    }

    public function turnOff(): void
    {
        echo "Washing machine off\n";
    }

    public function wash(): void
    {
        echo "Washing clothes\n";
    }
}
