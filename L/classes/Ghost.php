<?php

include('Movable.php');

class Ghost implements Movable
{
    public function move(): void
    {
        echo "The ghost floats silently.\n";
    }
}
