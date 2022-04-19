<?php
function br($titulo=''){
    echo("<br>");
    echo("<h4>$titulo</h4>");
}

//Variáveis
br('Variáveis');
$myVar1 = 'Hello';
$myVar2 = 'World';
//Concatenação
echo $myVar1.' '.$myVar2;

br('Arrays');
//pode ser declarado assim
$numbers = array(12,43,22,34,65);
//ou assim
$numbers = [1,5,34,23,76,43];
print_r($numbers);
br('Imprimir valor do índice de array');
echo $numbers[1];
br('Array associativo');
$ages = array(
    "john" => 35,
    "mary" => 27,
    "bob" => 55
);
echo $ages['mary'];
br('Contagem do array');
echo count($ages);
br('Remover o último ítem do array array_pop');
array_pop($ages);
print_r($ages);
br('Remover o pímeiro ítem do array array_shift');
array_shift($ages);
print_r($ages);

br('LOOPS');

br('For');
for($i =0; $i < 5; $i++){
    echo $i;
}
br('While');
while($i <= 10){
    echo 'Number '.$i.'<br/>';
    $i++;
}
br('Foreach');
$numbers = [1,5,34,23,76,43];
foreach($numbers as $number){
    echo 'This is number '. $number . '<br />';
}
$ages = array(
    "john" => 35,
    "mary" => 27,
    "bob" => 55
);
foreach($ages as $age){
    echo 'Age is ' .$age. '<br />';
}
foreach($ages as $key => $age){
    echo $key. ' is ' . $age . ' years old' . '<br />';
}

br('Funções');
function greet($name){
    echo 'Hello ' . $name;
}
greet('Jean');

br('If');
$num = 10;
if($num == 10){
    echo 'Correct';
} elseif($num == 50) {
    echo 'Awesome';
} else {
    echo 'Wrong';
}
?>