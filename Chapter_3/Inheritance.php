<?php
// Parent class
class Vehicle {
    public $brand;
    public function __construct($brand) {
        $this->brand = $brand;
    }

    public function showBrand() {
        return "Brand: " . $this->brand;
    }
}

// Child class inheriting from Vehicle
class Car extends Vehicle {
    public $model;
    public function __construct($brand, $model) {
        parent::__construct($brand); // Calling the parent constructor
        $this->model = $model;
    }

    public function showDetails() {
        return $this->showBrand() . ", Model: " . $this->model;
    }
}

// Creating an object of the child class
$myCar = new Car("Ford", "Mustang");
echo $myCar->showDetails();  // Output: Brand: Ford, Model: Mustang
?>

