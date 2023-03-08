<?php

interface Database{

    public function get();
    public function add();
    public function update();
    public function delete();
}

class MySql implements Database{

    public function get(){}
    public function add(){
        echo "adicionando com mysql";
    }
    public function update(){}
    public function delete(){}

}

class Oracle implements Database{

    public function get(){}
    public function add(){
        echo "adicionando com oracle";
    }
    public function update(){}
    public function delete(){}

}

$database = new Oracle();
$database->add();
?>