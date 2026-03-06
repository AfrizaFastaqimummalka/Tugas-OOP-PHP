<?php

class Car {

    public $name;
    public $brand;

    public function __construct($name,$brand){
        $this->name = $name;
        $this->brand = $brand;
    }

    public function startEngine(){
        return "The engine of ".$this->name." is started.";
    }

    public function stopEngine(){
        return "The engine of ".$this->name." is stopped.";
    }

}

?>