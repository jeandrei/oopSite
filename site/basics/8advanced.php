<?php

class People{
    public $person1 = 'Mike';
    public $person2 = 'Shelly';
    public $person3 = 'Jeff';

    protected $person4 = 'john';
    private $person5 = 'Jen';


    function iterateObject(){
        echo '<br \>Tem acesso a private e protected dentro da classe<br \>';
        foreach($this as $key => $value){
            print "$key => $value \n";
        }
    }
}


$people = new People;
$people->iterateObject();

echo '<br \>Não tem acesso a private e protected fora da classe<br \>';
foreach($people as $key => $value){
    print "$key => $value \n";
}
?>