<?php

abstract class Payment {
    abstract public function process($money);
}

class CreditCardPayment extends Payment{
    public function process($money){
        print("Оплата картой на сумму - {$money} рублей.<br>");
    }
}

class PayPalPayment extends Payment{
    public function process($money){
        print("Оплата через PayPal на сумму {$money} рублей, прошла успешно.<br>");
    }
}

class BankTransferPayment extends Payment{
    public function process($money){
        print("Перевод на сумму - {$money} рублей, был выполнен успещно.<br>");
    }
}

$Payments = [new CreditCardPayment(), new PayPalPayment(), new BankTransferPayment()];

foreach($Payments as $Payment){
    $Payment -> process(200);
}