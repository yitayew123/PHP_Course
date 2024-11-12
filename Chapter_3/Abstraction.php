<?php
abstract class Animal {
    // Abstract method (no implementation here)
    abstract public function makeSound();

    // Non-abstract method
    public function sleep() {
        return "Sleeping...";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Bark";
    }
}

$dog = new Dog();
echo $dog->makeSound();  // Output: Bark
echo $dog->sleep();      // Output: Sleeping...
?>

