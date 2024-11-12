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

$rectangle = new Rectangle(10, 5);
$circle = new Circle(3);

echo "Rectangle area: " . $rectangle->area() . PHP_EOL; // Output: Rectangle area: 50
echo "Circle area: " . $circle->area() . PHP_EOL;       // Output: Circle area: 28.274333882308
?>


