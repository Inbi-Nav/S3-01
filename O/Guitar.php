<?php
require 'Instrument.php';

class Guitar implements Instrument {
    public function play(): string {
        return "🎸 Strumming the guitar\n";
    }
}
?>
