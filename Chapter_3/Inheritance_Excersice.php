<?php

// Parent class: Vehicle
class Vehicle {
    public $make; // Vehicle make
    public $year; // Vehicle manufacturing year

    // Method to display vehicle info
    public function displayInfo() {
        echo "Make: " . $this->make . "\n";
        echo "Year: " . $this->year . "\n";
    }
}

// Child class: Car (inherits from Vehicle)
class Car extends Vehicle {
    public $doors; // Number of doors in the car

    // Method to display car info, calling displayInfo() from Vehicle
    public function displayCarInfo() {
        // Call parent class method
        $this->displayInfo();
        // Display number of doors specific to Car class
        echo "Doors: " . $this->doors . "\n";
    }
}

// Creating an instance of the Car class
$myCar = new Car('','');
$myCar->make = "Toyota";
$myCar->year = 2020;
$myCar->doors = 4;

// Display car info
$myCar->displayCarInfo(); 

?>