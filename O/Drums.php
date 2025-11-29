<?php
require 'Instrument.php';

class Drums implements Instrument {
    public function play(): string {
        return "🥁 Beating the drums\n";
    }
}
?>
