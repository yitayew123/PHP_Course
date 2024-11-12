<?php
class Car {
    public $make;
    public $model;

    public function setDetails($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    public function getDetails() {
        return "This car is a " . $this->make . " " . $this->model;
    }
}

// Creating an object and accessing public properties and methods
$car = new Car('Honda','Civic');
$car->setDetails("Honda", "Civic");
echo $car->getDetails();  // Output: This car is a Honda Civic
?>

