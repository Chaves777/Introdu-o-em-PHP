<?php

echo"<h1>Hello World</h1>";
echo "<hr>";


$nome = "Lucas";
$idade = 17;

echo $nome;
echo "<br><br>";

if($nome == 'Lucas' and $idade === 17){
    echo 'Esse é um if, ' . $nome;
    echo "<br><br>";
}

function saudacao($nome){
    return "Essa é uma função, " . $nome;
}

echo saudacao(nome: $nome);

echo "<br>";

$arr = array(1,2,3,4,5);
$arr2 = [1,2,3,4,5];

echo $arr[2] ."<br>". $arr2[3];

echo "<br>";

foreach( $arr2 as $number){
    echo $number . "<br>";
}

?>