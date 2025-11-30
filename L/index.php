<?php
    include('classes/Ghost.php');
    
    function doMovement(Movable $movable)
    {
        $movable->move();
    }
        function doCombat(Attackable $attackable)
    {
        $attackable->attack();
    }
    $enemy = new Ghost();
    doMovement($enemy); 

?>
