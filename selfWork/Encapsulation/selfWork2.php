<?php

class User {
    private $userName;
    private $password;

    public function __construct($userName, $password) {
        $this->userName = $userName;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function setPassword($Password){
        $this ->password = password_hash($Password, PASSWORD_DEFAULT);
    }

    public function checkPassword($Password){
        if (password_verify($Password, $this ->password)) {
            print("Пароль введен правильно!<br>");
        }else{
            print("Пароль введен не правильно!<br>");

        }
    }


}

$user = new User('sana', 12112006);
$user ->checkPassword(12112006);

$user ->setPassword(13091988);
$user -> checkPassword(12112006);
$user -> checkPassword(13091988);