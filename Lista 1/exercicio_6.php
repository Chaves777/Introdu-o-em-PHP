<?php
//Aprovado ou reprovado

echo "<h2>Média de notas</h2>";

$nota1 = 6.0;
$nota2 = 6.2;
$nota3 = 8.7;
$media = ($nota1 + $nota2 + $nota3) / 3;

echo "Sua média foi " . $media . " então ";

if ($media > 7){
    echo "você foi aprovado!!!";
}
else{
    echo "você foi reprovado!!!";
}

?>