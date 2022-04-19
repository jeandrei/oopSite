<?php

//pelo que eu entendi serve para quando vc não quer
//que outra extenda a um método ou propriedade
//pq se der um extend Foo vai gerar o erro
//Cannot override final method Foo
class Foo{
    final public function sayHello(){
        echo 'Hello World';
    }
}

?>