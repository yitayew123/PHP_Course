<?php
class Animal {
    public function makeSound() {
        return "Some sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Bark";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow";
    }
}

$dog = new Dog();
$cat = new Cat();
echo $dog->makeSound();  // Output: Bark
echo $cat->makeSound();  // Output: Meow
?>


