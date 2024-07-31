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