<?php
class Car {
    public $make;           // Public property
    private $model;         // Private property

    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    // Public method
    public function displayMake() {
        return "Make: " . $this->make;
    }

    // Private method
    private function displayModel() {
        return "Model: " . $this->model;
    }

    public function showModel() {
        // Accessing private method within the class
        return $this->displayModel();
    }
}

$car = new Car("Honda", "Civic");
echo $car->displayMake();    // Accessible, output: Make: Honda
echo $car->showModel();      // Output: Model: Civic

