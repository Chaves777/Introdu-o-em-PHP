<?php
//Calculadora de descontos

echo "<h2>Calculadora de descontos</h2>";
$preco = 500;
$desconto = 20;   

echo "O preço é de R$" . $preco . " e o valor do desconto é de " . $desconto . "% então o valor total com desconto é R$" . $preco - ($preco * $desconto / 100);
?>