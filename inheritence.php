<?php
    //Inheritence
    Class Cars{
        var $door=4;
    }
    Class Motor extends Cars{
        function carDetails(){
            echo $this->door;
        }

    }

    $tacoma = new Motor();
    echo $tacoma->door;
?>