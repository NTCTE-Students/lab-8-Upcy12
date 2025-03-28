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



interface Actions {
    public function run();

    public function sleep();
}

class Dog extends Animal implements Actions {
    public function makeSound() {
        print("{$this -> getName()} говорит Гав-гав!<br>");
    }

    public function run() {
        print("{$this -> getName()} бежит!<br>");
    }
    public function sleep() {
        print( "{$this -> getName()} спит!<br>");
    }
}


class Cat extends Animal implements Actions {
    public function makeSound() {
        print("{$this -> getName()} говорит: Мяу-мяу!<br>");
    }

    public function run() {
        print("{$this -> getName()} крадётся.<br>");
    }

    public function sleep() {
        print("{$this -> getName()} спит.<br>");
    }
}

$dog = new Dog();
$dog -> setName("Бораш");

$cat = new Cat();
$cat -> setName("Наша");

$animals = [$dog,$cat];

foreach($animals as $animal) {
    $animal -> run();
    $animal ->sleep();
}