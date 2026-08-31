<?php
// Mustafa Raofi 

// Task 1: Create and Use a Class Constant
class Library {
    const MAX_BOOKS = 3;
}

echo "Maximum books allowed: " . Library::MAX_BOOKS;
echo "<br>";

// Task 2: Create a Static Property and Static Method
class StudentCounter {
    public static $count = 0;

    public static function addStudent()
    {
        self::$count = self::$count + 1;
    }
}

StudentCounter::addStudent();
StudentCounter::addStudent();
StudentCounter::addStudent();

echo "Total students: " . StudentCounter::$count;
echo "<br>";

// Task 3: Create an Abstract Class and Abstract Method
abstract class Vehicle {
    abstract public function start();
}
class Car extends Vehicle {
    public function start()
    {
        echo "Car engine started.";
    }
}
class Bike extends Vehicle {
    public function start()
    {
        echo "Bike started.";
    }
}

$car = new Car();
$car->start();

echo "<br>";

$bike = new Bike();
$bike->start();
?>