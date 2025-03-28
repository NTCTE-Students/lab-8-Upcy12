<?php

class Employee {
    public $name;
    Public $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }
}

class Manager extends Employee{

    public function __construct($name, $salary) {
        parent::__construct($name, $salary);
    }

    public function manageTeam($name1, $name2) {
        print("$this->name управляет командой из $name1, $name2, так как он $this->salary.<br>");
    }
}

class Developer extends Employee{
    public $title;
    public $price;
    public function __construct($name, $salary, $price, $title) {
        parent::__construct($name, $salary);
        $this->price = $price;
        $this->title = $title;
    }

    public function write_code(){
        print("$this->name, написал код $this->title стоимостью $this->price р, так как он $this->salary.<br>");
    }
}

class Designer extends Employee{
    public $title;
    public $price;
    public function __construct($name, $salary, $price, $title) {
        parent::__construct($name, $salary);
        $this->price = $price;
        $this->title = $title;
    }

    public function paint(){
        print("$this->name нарисовал $this->title, стоимостью $this->price p, так как он $this->salary.");
    }
}

$manager = new Manager('Алексей', 'Менеджер');
$manager->manageTeam('Александр', 'Виктория');

$developer = new Developer('Александр', 'Разработчик', 100, 'лаунчер');
$developer->write_code();

$designer = new Designer('Виктория', 'Дизайнер', 100, 'логотип') ;
$designer->paint();