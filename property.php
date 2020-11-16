<?php
    //Property- 1st System
 Class Cars{
    var $wheel = 444;
 }
 $bmw = new Cars();
 echo $bmw->wheel;

 
echo '<br>';

// -------------------------------
    //Property- 2nd System

 Class Computer{
     var $probook = 55000;

     function laptop(){
         echo $this->probook;
     }
 }

 $mylaptop = new Computer();
 echo $mylaptop->laptop();
?>