<?php

class User{
    public $username;
    //static é quando não queremos que o valor seja alterado
    //static não se instancia
    public static $minPassLength = 5;

    public static function validatePassword($password){
        //quando usamos static para acessar a propriedade tem que usar self::
        if(strlen($password) >= self::$minPassLength){
            return true;
        } else {
            return false;
        }
    }
}

$password = 'password';
if(User::validatePassword($password)){
    echo 'Password is valid';
} else {
    echo 'Password is not valid';
}

echo '<br \>'. User::$minPassLength;

?>