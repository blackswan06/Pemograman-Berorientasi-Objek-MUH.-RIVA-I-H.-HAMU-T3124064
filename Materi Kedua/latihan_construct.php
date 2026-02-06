<?php
class Fruit{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }
}

$apple = [
        new Fruit("Apple"),
        new Fruit("Banana"),
        new Fruit("Mango")
        ];
    foreach($apple as $fruit){
        echo "Fruit Name: ". $fruit->name . "<br>";
    }
?>