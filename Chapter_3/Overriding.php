<?php
class Animal {
    public function sound() {
        return "Some sound";
    }
}

class Dog extends Animal {
    public function sound() {
        return "Bark";
    }
}

class Cat extends Animal {
    public function sound() {
        return "Meow";
    }
}

function animalSound(Animal $animal) {
    echo $animal->sound() . PHP_EOL;
}

$dog = new Dog();
$cat = new Cat();

animalSound($dog); // Output: Bark
animalSound($cat); // Output: Meow
?>

