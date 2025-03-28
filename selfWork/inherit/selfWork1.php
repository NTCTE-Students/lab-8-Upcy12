<?php

class Vehicle {
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getInfo() {
        return "{$this->make} {$this->model} {$this->year}";
    }
}

class Car extends Vehicle {
    public $color;

    public function __construct($make, $model, $year ,$color) {
        parent::__construct($make, $model, $year);
        $this->color = $color;
        print("Это машина марки: $make, модели: $model, $year года выпуска с $color цветом<br>");
    }
}

class Bike extends Vehicle {
    public $type;

    public function __construct($make, $model, $year ,$type) {
        parent::__construct($make, $model, $year);
        $this->type = $type;
        print("Это веосипед марки: $make, модели: $model, $year года выпуска и типа: $type<br>");
    }
    
}

class Truck extends Vehicle {
    public $loadCapacity;

    public function __construct($make, $model, $year ,$loadCapacity) {
        parent::__construct($make, $model, $year);
        $this->loadCapacity = $loadCapacity;
        print("Это грузовик марки: $make, модели: $model, $year года выпуска и $loadCapacity кг - его грузоподьемность<br>");
    }
    
}

$car = new Car('Toyota', 'rav4', 5, 'black');

$bicycle = new Bike('Adriatica', 'city 3 man 28 6-sp', 5,'дорожный');

$truck = new Truck('Камаз', '5490', 3, 44000);