<?php
    class Cars{
        public $name;
        public $color;

        function setName ($name1){
            $this->name = $name1;
        }

        function setColor ($color1) {
            $this->color = $color1;
        }


    }



$sportsCar = new cars();
$sportsCar->setName(name1:"Ferrari");
$sportsCar->setColor(color1:"red");

$modernCar = new Cars();
$modernCar->setName(name1:"BMW");
$modernCar->setColor(color1:"Blue");

$budgetCar =new Cars();
$budgetCar->setName(name1:"Hundai");
$budgetCar->setColor(color1:"Black");


echo "Car : $sportsCar->name is $SportsCar->color Color". PHP_EOL;
echo "Car : $modernCar->name is $modernCar->color Color". PHP_EOL;
echo "Car : $budgetCar->name is $budgetCar->color Color". PHP_EOL;

?>

