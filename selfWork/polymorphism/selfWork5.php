<?php

abstract class Order{
    abstract public function calculateTotal($money);
}

class OnlineOrder extends Order{
    public function calculateTotal($money){
        $money*= 1.5;
        print("Сумма оплаты: {$money} рублей, при онлайн оплате.<br>");
    }
}

class StoreOrder extends Order{
    public function calculateTotal($money){
        $money*= 1.1;
        print("Сумма оплаты: {$money} рублей, при физической оплате!<br>");
    }
}

class PhoneOrder extends Order{
    public function calculateTotal($money){
        $money*= 1.2;
        print("Сумма оплаты: {$money} рублей, при телефонной оплате!");
    }
}

$Orders = [new OnlineOrder(), new StoreOrder(), new PhoneOrder()];

foreach($Orders as $Order){
    $Order -> calculateTotal(200);
}