<?php

trait Validatable{
    public function validate($data){
        if (filter_var($data, FILTER_VALIDATE_EMAIL)){
            return "Email $data валиден!<br>";
        }else{
            return "Email $data не валиден!<br>";
        }
    }
}

class RegistrationForm{
    use Validatable;
}
class LoginForm{
    use Validatable;
}

$regForm = new RegistrationForm();
print($regForm->validate('sana@gmail.com'));

$loginForm = new LoginForm();
print($loginForm->validate('sana#gmal.com'));