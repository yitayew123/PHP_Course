<?php
class Car {
    public $brand;
    public $model;

    // Constructor to initialize properties
    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
        echo "Car is created: " . $this->brand . " " . $this->model . "<br>";
    }

    // Destructor to perform cleanup tasks
    public function __destruct() {
        echo "Car is destroyed: " . $this->brand . " " . $this->model . "<br>";
    }
}

// Creating a new object of the Car class
$car1 = new Car("Toyota", "Corolla");
// Destructor is called automatically at the end of the script
?>

