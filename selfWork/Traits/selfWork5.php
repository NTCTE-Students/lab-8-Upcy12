<?php

trait Authenticatable{
    private $name;
    private $password;
    // переменная отвечающая
    private $logged = false;
    // войти в аккаунт
    public function login($name, $password){
        if($this->logged == false){
            $errors = [];
            if ($this->name != $name){
                $errors = 'Неправильно введено имя пользователя. <br>';
            }
            if ($this->password != $password){
                $errors = 'Неправильно введен пароль от аккаунта. <br>';
            }
            if (empty($errors)){
                $this->logged = true;
                print ('Вход прошел успешно! <br>');
            }else{
                print ('Неправильно введен имя или пароль. <br>');
            }
        }else{
            print('Вы уже вошли в аккаунт! <br>');
        }
    }
    // выйти из аккаунта
    public function logout(){
        if($this->logged == true){
            $this->logged = false;
            print('Вы вышли из аккаунта! <br>');
        }else{
            print('Вы не находитесь в аккаунте! <br>');
        }
    }
    // регистрация
    public function registration($name, $password){
        if($this->logged == false){
            if($this->name == $name){
                print('Пользователь с таким именем уже существует. <br>');
            }else{
                $this->name = $name;
                $this->password = $password;
                $this->logged = true;
                print ('Регистрация прошла успешно! <br>');
            }
        }else{
            print('Вы уже находитесь в аккаунте. <br>');
        }
    }
}

class User{
    use Authenticatable;
}

$user = new User();
$user->registration('Sasha', 'p.a.s.s.00');
$user->logout();
$user->login('Sash', 'p.a.s.s.00');
$user->login('Sasha', 'p.a.s.s.00');