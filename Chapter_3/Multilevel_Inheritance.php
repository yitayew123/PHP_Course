<?php
class Vehicle {
    public function type() {
        return "Vehicle";
    }
}

class Car extends Vehicle {
    public function model() {
        return "Car Model";
    }
}

class ElectricCar extends Car {
    public function fuel() {
        return "Electric";
    }
}

$myElectricCar = new ElectricCar('','');
echo $myElectricCar->type(); // Output: Vehicle
echo $myElectricCar->model(); // Output: Car Model
echo $myElectricCar->fuel(); // Output: Electric
?>

