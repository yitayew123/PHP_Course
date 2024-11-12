<?php
class Bike {
    public $brand;
    public $model;

    // Constructor with default values
    public function __construct($brand = "Honda", $model = "CBR") {
        $this->brand = $brand;
        $this->model = $model;
    }

    // Method to display bike details
    public function getBikeDetails() {
        return "Brand: " . $this->brand . ", Model: " . $this->model;
    }
}

// Creating a new object with default values
$bike1 = new Bike();
echo $bike1->getBikeDetails();  // Output: Brand: Honda, Model: CBR

// Creating a new object with specified values
$bike2 = new Bike("Yamaha", "R1");
echo $bike2->getBikeDetails();  // Output: Brand: Yamaha, Model: R1
?>

