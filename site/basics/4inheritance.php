<?php
//Aula 12
//Tudo que estiver disponível na classe first 
//estará disponível na classe second pois ela estende a first
class First{
    public $id = 23;
    protected $name = 'John Doe';

    public function saySomething($word){
        echo $word;
    }
}


class Second extends First{
    
    public function getName(){
        echo $this->name;
    }
}

$second = new Second;

//não conseguimos acessar direto uma propriedade quando ela é private
//para conseguir temos que acessar atrávés de um método
//nesse caso getName()
//echo $second->name;
echo $second->getName();
?>