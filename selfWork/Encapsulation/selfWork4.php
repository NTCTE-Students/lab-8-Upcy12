<?php

class Counter {
    private $count;

    public function __construct($count) {
        $this->count = $count;
    }

    public function increment($number) {
        $this->count += $number;
        print("Число успешно увеличилось!<br>");
    }

    public function decrement($number) {
        if ($number <= $this->count) {
            $this->count -= $number;
            print("Число успешно уменьшилось!<br>");
        }else{
            print("При вычитании не должен получиться нуль!<br>");
        }
    }

    public function getCount() {
        print("Текущее значение числа = $this->count<br>");
    }
}

$counter = new Counter(50);
$counter->getCount();
$counter->increment(25);
$counter->getCount();
$counter->decrement(76);
$counter->getCount();
$counter->decrement(50);
$counter->getCount();