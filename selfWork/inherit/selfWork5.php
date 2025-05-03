<?php

class Device{
    public $brand;
    public $model;
    public function __construct($brand, $model){
        $this->model = $model;
        $this->brand = $brand;
    }
}

class smartphone extends Device{
    public $size;

    public function __construct($brand,$model,$size){
        parent::__construct($brand,$model);
        $this->size = $size;
    }
    public function call($name) {
        print("Звонок с телефона - $name<br>");
    }
}

class Laptop extends Device{
    public $memory;
    public function __construct($brand, $model, $memory) {
        parent::__construct($brand,$model);
        $this->memory = $memory;
    }
    public function getMemory(){
        print("У данного ноутбука $this->memory гб памяти<br>");
    }
}

class Tablet extends Device{
    public $resolution;

    public function __construct($brand, $model, $resolution){
        parent::__construct($brand,$model);
        $this->resolution = $resolution;
    }

    public function getResolution(){
        print("Разрешение планшета - $this->resolution.");
    }
}

$smartphone = new smartphone('Xiaomi', '9c', '40x10');
$smartphone->call('Aleksandr');

$laptop = new Laptop('hp','1115',250);
$laptop->getMemory() ;

$tablet = new Tablet('Samsung','255s','1920x1080');
$tablet->getResolution() ;