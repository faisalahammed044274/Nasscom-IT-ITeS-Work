<?php
//Asscess modifier
Class Cars{
    //public, private, protected
    //Property, Method

    public $door = 14;
    private $seat = 12;
    protected $wheel = 20;

    function carDetails(){
        echo $this->seat;
        echo "<br>";
        echo $this->wheel;
        echo "<br>";
        echo $this->door;
    }

}

$tacoma = new Cars();
//echo $tacoma->door;
echo $tacoma->carDetails();

?>