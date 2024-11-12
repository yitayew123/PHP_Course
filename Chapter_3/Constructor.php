<?php
class Car {
    public $brand;
    public $model;

    // Constructor to initialize properties
    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    // Method to display car details
    public function getCarDetails() {
        return "Brand: " . $this->brand . ", Model: " . $this->model;
    }
}

// Creating a new object of the Car class
$car1 = new Car("Toyota", "Corolla");
echo $car1->getCarDetails();  // Output: Brand: Toyota, Model: Corolla
?>

