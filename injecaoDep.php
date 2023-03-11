<?php

class Database{
    private $engine;

    public function __construct(DatabaseInterface $eng){
        $this->engine = $eng;
    }

    public function getAll(){
        return $this->engine->get();
    }
}

interface DatabaseInterface{

    public function get();
    public function add();
    public function update();
    public function delete();
}

class MySql implements DatabaseInterface{

    public function get(){
        echo "Usando mysql";
    }
    public function add(){
        echo "adicionando com mysql";
    }
    public function update(){}
    public function delete(){}

}

class Oracle implements DatabaseInterface{

    public function get(){
        echo "Usando oracle";
    }
    public function add(){
        echo "adicionando com oracle";
    }
    public function update(){}
    public function delete(){}

}

$database = new Database(new MySql());
$database->getAll();
?>