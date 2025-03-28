<?php

class Animal {
    private $name;
    private $age;

    public function describe() {
        print("Это {$this->name}, ему {$this->age} лет.<br> ");
    }

    public function makeSound() {
        print("{$this -> getName()} издает звук");
    }

    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setAge($age) {
        if( $age >= 1) {
            $this ->age = $age;
        }else{
            print("Возраст не может быть отрицательным!<br>");
        }
    }
}

class Dog extends Animal {
    public function makeSound() {
        print("{$this -> getName()} говорит : Гав-Гав!<br>");
    }
}

class Cat extends Animal {
    public function makeSound() {
        print("{$this -> getName()} говорит : Мяу-мяу!<br>");
    }
}

$animals = [];

$dog = new Dog();
$dog->setName("Barash");
$dog->setAge(32);
$dog ->describe();
$dog ->makeSound();

$cat = new Cat();
$cat -> setName("Nusha");
$cat -> setAge(80);
$cat ->describe();
$cat ->makeSound();

