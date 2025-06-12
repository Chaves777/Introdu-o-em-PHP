<?php

$soma = 0;

for ($i = 0; $i < 101; $i++) {
    if ($i % 2== 0) {
        $soma += $i;
    }
}
echo $soma;
echo "<br>";
?>