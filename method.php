<?php
// Method
class Cars{
    function CarDetails1(){
    }

    function CarDetails2(){
    }


    function CarDetails3(){
    }
}

$methods = get_class_methods('Cars');
foreach ($methods as $method) {
echo $method.'<br>';
}

?>
