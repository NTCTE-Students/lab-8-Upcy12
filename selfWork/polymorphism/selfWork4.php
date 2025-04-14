<?php

interface Database {
    public function connect();
    public function query($say);
}


class MySQLDatabase implements Database{
    public function connect(){
        print('Подключение к MySQL.<br>');
    }

    public function query($say){
        print("Запрос '{$say}', был выполен в MySQL!<br>");
    }
}

class PostreDatabase implements Database{
    public function connect(){
        print('Подключение к Postre.<br>');
    }

    public function query($say){
        print("Запрос '{$say}', был выполен в Postre!<br>");
    }
}

class SQLiteDatabase implements Database{
    public function connect(){
        print('Подключение к SQLite.<br>');
    }

    public function query($say){
        print("Запрос '{$say}', был выполен в SQLite!<br>");
    }
}

$Databases = [new MySQLDatabase(), new PostreDatabase(), new SQLiteDatabase()];

foreach($Databases as $DB){
    $DB -> connect();
    $DB -> query('SELECT *');
}