<?php

$precos = [10,30,34,23,19];
$soma = 0;

foreach ($precos as $total){
     $soma = $soma + $total;
}

echo "O valor total dos 5 produtos é R$". $soma ."";

?>