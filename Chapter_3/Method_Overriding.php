<?php
class Shape {
    public function area() {
        return "Calculating area";
    }
}

class Circle extends Shape {
    public function area() {
        return "Calculating area of Circle";
    }
}

$circle = new Circle('');
echo $circle->area(); // Output: Calculating area of Circle
?>

