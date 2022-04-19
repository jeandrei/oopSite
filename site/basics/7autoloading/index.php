<?php
//Aula 16 Autoloading
//O que o spl_autoload_register vai fazer é
// dar um include em todos os arquivos
//das classes exemplo include 'Foo.php';
//Os nomes dos arquivos das classes tem que ser a
//primeira letra em Maiúscula
spl_autoload_register(function($class_name){
    include $class_name . '.php';
});

$foo = new Foo;
$bar = new Bar;

$bar->sayHello();

?>