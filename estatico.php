<?php

//metodo estatico
class Matematica{

    public static function sum($x, $y){
        return $x + $y;
    }
}

echo Matematica::sum(10, 20);


?>