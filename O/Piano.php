<?php
require 'Instrument.php';

class Piano implements Instrument {
    public function play(): string {
        return "🎹 Playing the piano\n";
    }
}
?>
