<?php
//Calculadora

$valor1 = '10';
$valor2 = '5';

$soma = $valor1 + $valor2;
$subtracao = $valor1 - $valor2;
$multiplicacao = $valor1 * $valor2;
$divisao = $valor1 / $valor2;

echo "<h2>Calculadora</h2>";
echo "<br>";

echo $valor1 . " + " . $valor2 . " = " . $soma;
echo "<br>";
echo $valor1 . " - " . $valor2 . " = " . $subtracao;
echo "<br>";
echo $valor1 . " x " . $valor2 . " = " . $multiplicacao;
echo "<br>";
echo $valor1 . " / " . $valor2 . " = " . $divisao;

?>