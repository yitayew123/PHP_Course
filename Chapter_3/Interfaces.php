<?php
interface Shape {
    public function area();
}
class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}
class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * ($this->radius ** 2);
    }
}
function calculateArea(Shape $shape) {
    echo "Area: " . $shape->area() . PHP_EOL;
}

$rectangle = new Rectangle(10, 5);
$circle = new Circle(3);

calculateArea($rectangle); // Output: Area: 50
calculateArea($circle); // Output: Area: 28.274333882308
?>



