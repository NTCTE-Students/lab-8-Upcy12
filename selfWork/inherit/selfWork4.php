<?php

class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
    public function eat(){
        print("$this->name ест.<br>");
    }

    public function sleep(){
        print("$this->name дрыхнет.<br>");
    }
}

class Bird extends Animal {
    public function __construct(string $name) {
        parent::__construct($name);
    }
    public function eat(){
        parent::eat();
    }
    public function sleep(){
        parent::sleep();
    }
    public function fly(){
        print("Все говорят о $this->name, что оно летает!<br>");
    }
}

class Fish extends Animal {
    public function __construct(string $name) {
        parent::__construct($name);
    }
    public function eat(){
        parent::eat();
    }
    public function sleep(){
        parent::sleep();
    }
    public function swim(){
        print("$this->name плывет!<br>");
    }
}

class Mammal extends Animal {
    public function __construct(string $name) {
        parent::__construct($name);
    }
    public function eat(){
        parent::eat();
    }
    public function sleep(){
        parent::sleep();
    }
    public function walk(){
        print("Все говорят о $this->name, что оно шевелится!<br>");
    }
}

$pinguin = new Bird('Shurik');
$pinguin->eat();
$pinguin->fly();
$pinguin->sleep();
print("<br>");

$goldFish = new Fish('Sanik');
$goldFish->eat();
$goldFish->sleep();
$goldFish->swim();
print("<br>");

$cat = new Mammal('Aleksandr');
$cat->eat();
$cat->walk();
$cat->sleep();