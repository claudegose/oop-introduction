<?php

//
//declare(strict_types=1);
//require "exercise_1_classes.php";
//
//$cola = new Beverages();
//$cola->getInfo();

//
//require "exercise_2_extending.php";
//
//
//




class Car  //Always first letter capital
{

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;



    function MoveWheels()  //Function within a class is a Method
    {
  $this->wheels = 10;



    }
}


//$bmw = new Car();
//$truck = new Car();
//echo $bmw->wheels . "<br>";
//
//echo $truck->wheels = 10;


class plane extends Car
{


    var $wheels = 20;







}


$jet = new Plane();

echo $jet->wheels . "<br>";


