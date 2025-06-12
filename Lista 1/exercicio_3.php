<?php
//Maior ou menor de idade

echo "<h2>Você é maior ou menor de idade?</h2>";

$idade = 17;

if ( $idade < 18) {
    echo "Sua idade é " . $idade . " então você é menor de idade!!!";
}
else {
    echo "Sua idade é " . $idade . " então você é maior de idade!!!";
}


?>