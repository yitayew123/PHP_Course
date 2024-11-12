<?php
class Person {
    public function greet() {
        return "Hello!";
    }
}

class Employee extends Person {
    public function greet() {
        return parent::greet() . " I am an employee.";
    }
}

$employee = new Employee();
echo $employee->greet(); // Output: Hello! I am an employee.
?>

