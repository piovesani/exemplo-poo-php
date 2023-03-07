<?php

class Calculadora{

    private int $number = 0;

    public function add($n){
        $this->$number += $n;
    }

    public function sub($n){
        $this->$number -= $n;
    }

    public function multiply($n){
        $this->$number *= $n;
    }
    public function divide($n){
        $this->$number /= $n;
    }

    public function total(){
        return $this->$number;
    }
}


?>