<?php
class Vehicle {
    protected $fuelType;

    public function setFuelType($fuel) {
        $this->fuelType = $fuel;
    }

    protected function getFuelType() {
        return $this->fuelType;
    }
}

class Car extends Vehicle {
    public function showFuelType() {
        return "This car runs on " . $this->getFuelType();
    }
}

$car = new Car();
$car->setFuelType("Gasoline");
echo $car->showFuelType();  // Output: This car runs on Gasoline
?>


