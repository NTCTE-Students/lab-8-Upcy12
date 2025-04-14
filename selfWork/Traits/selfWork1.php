<?php

trait Logger {
    public function log($message){
        print("Лог: {$message}<br>");
    }
}

class User {
    use Logger;

    public function createUser($name){
        $this -> log("Пользователь '{$name}' создан!");
    }
}

class Order {
    use Logger;

    public function createOrder($price){
        $this -> log("Заказ на сумму {$price} рублей создан!");
    }
}

class Product {
    use Logger;

    public function createProduct($title){
        $this -> log("Продукт '{$title}' создан!");
    }
}

$user = new User();
$user -> createUser('sana');

$order = new Order();
$order -> createOrder(100);

$product = new Product();
$product -> createProduct('banana');