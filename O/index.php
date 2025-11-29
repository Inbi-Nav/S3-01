<?php

require 'Instruments/Instrument.php';
require 'Instruments/Guitar.php';
require 'Instruments/Drums.php';
require 'Instruments/Piano.php';
require 'InstrumentPlayer.php';

$player = new InstrumentPlayer();

$player->play(new Guitar());
$player->play(new Drums());
$player->play(new Piano());
?>