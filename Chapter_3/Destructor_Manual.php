<?php
class Bike {
    public $brand;

    // Constructor to initialize the brand
    public function __construct($brand) {
        $this->brand = $brand;
        echo "Bike is created: " . $this->brand . "<br>";
    }

    // Destructor to clean up
    public function __destruct() {
        echo "Bike is destroyed: " . $this->brand . "<br>";
    }
}

// Creating a new object of the Bike class
$bike1 = new Bike("Yamaha");

// Manually destroying the object
unset($bike1);  // Destructor is called here

echo "Script continues...<br>";
?>