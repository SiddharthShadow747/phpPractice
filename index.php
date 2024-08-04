<?php
class apple {

    // Properties
    public $fruitName = "";
    public $fruitColor = "";

    // Methos/functions
    function set_name($fruitName){
        $this->fruitName = $fruitName;
    }

    function get_name(){
        return $this->fruitName;
    }
}
// $classObj = new apple();
// $classObj->set_name('Mango');
// $response1 = $classObj->get_name();
// $classObj->set_name('Aloo');
// $response = $classObj->get_name();
// echo $response1 . "<br>" .$response;

class Fruit {
    public $fruitName = "";
    
    //Constructor
    function __construct($fruitName)
    {
        $this->fruitName = $fruitName;
    }

    function __destruct()
    {
        echo $this->fruitName;
    }

    function get_fruit(){
        return $this->fruitName;
    }
}

// new Fruit("Orange");
// echo $objOfFruitClass;
// echo $objOfFruitClass->get_fruit();

class accessModifieres {
    public $fruitname;
    protected $fruitcolor;
    private $weight;

    public function a(){

    }
    protected function b(){

    }
    private function c(){

    }
}
// $acMfObj = new accessModifieres();
// $acMfObj->fruitname = "Apple";
// $acMfObj->fruitcolor = "Red";
// $acMfObj->weight = "1";

//Inheritance
class abc {
    public $name = '';
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function introduction(){
        echo $this->name;
        echo "</br>";
    }
}
class bcd extends abc {
    public function intro(){
        echo "I'm intro method";
    }
}

// $bcdClassObject = new bcd('strawberry');
// $bcdClassObject->introduction();
// $bcdClassObject->intro();

//Abstract class
abstract class language {
    public $name = '';
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function getName(): string ;
}
class php extends language {
    public function getName(): string
    {
        return $this->name;
    }
}
class ruby extends language {
    public function getName(): string
    {
        return $this->name;
    }
}

$name = new php('php');
echo $name->getName();
echo "</br>";

$name = new php('ruby');
echo $name->getName();
