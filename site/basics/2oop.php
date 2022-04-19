<?php

class User{
    //public consegue acessar fora da classe
    //protected apenas dentro da própria classe e as classe que a extendem tem acesso não acesso para alterar precisa ser pelo get ou set
    //private apenas a própria classe tem acesso
    
    //properties
    public $id;
    public $username;
    public $email;
    public $password;

    //construct executa sempre ao instanciar uma classe
    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
        echo 'Construct foi executada';
        $this->br();
    }

    //destruct executa sempre ao final de uma classe
    public function __destruct(){
        $this->br();
        echo 'Destruct foi executada';        
    }
    
    public function br(){
        echo '<br \>';
    }

    public function register(){
        echo 'User Registered';
    }

    public function login(){
        //chamar um método dentro do outro usamos a chave $this        
        $this->br();
        $this->auth_user();
    }

    public function auth_user(){
        echo $this->username. ' is authenticated';
    }
}

$user = new User('jean',123);
$user->register();
$user->login();


?>