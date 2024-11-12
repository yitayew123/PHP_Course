<?php
class Car {
    // Properties
    public $make;
    public $model;

    // Constructor method to initialize properties
    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    // Method to display car details
    public function display() {
        return "This car is a " . $this->make . " " . $this->model;
    }
}


// Creating an object of the Car class
$myCar = new Car("Toyota", "Corolla");

// Accessing the object's method
echo $myCar->display();  // Output: This car is a Toyota Corolla

?>

