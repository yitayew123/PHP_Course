<?php
class Computer {
    public $brand;
    public $model;

    // Constructor with logic to handle different arguments
    public function __construct($brand = null, $model = null) {
        if ($brand !== null && $model !== null) {
            $this->brand = $brand;
            $this->model = $model;
        } else {
            $this->brand = "Dell";
            $this->model = "XPS";
        }
    }

    // Method to display computer details
    public function getComputerDetails() {
        return "Brand: " . $this->brand . ", Model: " . $this->model;
    }
}

// Creating object with no arguments (uses default values)
$computer1 = new Computer();
echo $computer1->getComputerDetails();  // Output: Brand: Dell, Model: XPS

// Creating object with arguments
$computer2 = new Computer("Apple", "MacBook Pro");
echo $computer2->getComputerDetails();  // Output: Brand: Apple, Model: MacBook Pro
?>



