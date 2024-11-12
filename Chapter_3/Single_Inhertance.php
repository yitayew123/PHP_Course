<?php
class Animal {
    public function sound() {
        return "Animal makes a sound";
    }
}

class Dog extends Animal {
    public function sound() {
        return "Dog barks";
    }
}

$dog = new Dog();
echo $dog->sound(); // Output: Dog barks
?>

