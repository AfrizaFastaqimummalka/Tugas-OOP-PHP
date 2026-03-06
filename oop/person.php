<?php

class Person {

    public $firstName;
    public $lastName;

    public function __construct($firstName,$lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function sayHello($name){
        return "Hello ".$name.", my name is ".$this->firstName." ".$this->lastName.".";
    }

    public function sayGoodBye($name){
        return "Goodbye ".$name." from ".$this->firstName.".";
    }

}

?>