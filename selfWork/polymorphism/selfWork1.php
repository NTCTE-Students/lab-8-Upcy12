<?php

interface Notifier {
    public function send($message);
}

class EmailNotifier implements Notifier{
    public function send($message){
        print("Отправка email: {$message}<br>");
    }
}

class SMSNotifier implements Notifier{
    public function send($message){
        print("Отправка SMS: {$message}<br>");
    }
}

$email_message = new EmailNotifier();
$email_message -> send('Hello world!');

$SMS_message = new SMSNotifier();
$SMS_message -> send('Hello world!');