<?php
class Car {
    static $wheels = 4;
    var $hood = 1;

    public static function MoveWheels(){
        Car::$wheels = 10;
    } 
}
$bmw = new Car();
echo Car::$wheels;
echo "<br>";
Car::MoveWheels();
echo Car::$wheels;
?>