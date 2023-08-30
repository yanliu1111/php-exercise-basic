<?php
class Car {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    function MoveWheels(){
        $this -> wheels = 10;
    }
    function CreateDoors(){
        $this -> doors = 6;
    }
}

// if (class_exists("Car")) {
//     echo "Class exists";
// } else {
//     echo "Class does not exist";
// }
// if (method_exists("Car", "MoveWheels")) {
//     echo "Method exists";
// } else {
//     echo "Method does not exist";
// }test
$bmw = new Car();
$bmw -> MoveWheels();
$truck = new Car();
// $mercedes_benz = new Car();
//use the functionality inside the class
// $bmw->MoveWheels();
// $mercedes_benz->MoveWheels();
echo $bmw->wheels . "<br>";
echo $truck->wheels = 10 . "<br>";
$truck->CreateDoors();
echo $truck->doors;
?>