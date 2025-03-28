<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sessionManager = new SessionManager($_POST['name'], $_POST['password']);
    $sessionManager->get();
    exit();
}

class SessionManager {
    private $userName;
    private $password;

    public function __construct($userName, $password) {
        $this->userName = $userName;
        $this->password = $password;
    }

    public function get(){
        print("$this->userName, $this->password<br>");
        foreach($_SESSION as $session) {
            print("$session, ");
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Форма управления данными пользователя</h2>
    <form action="selfWork5.php" method="post">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name">
        <label for="password">Пароль:</label>
        <input type="text" id="password" name="password">
        <input type="submit" value="login">
    </form>
</body>
</html>