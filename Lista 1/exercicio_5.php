<?php

$jogador = 100;
$ganhou = 20;
$perdeu = 15;

$win = $jogador + $ganhou;
$loser = $jogador - $perdeu;

$game = 1;

if($game == 1){
    echo "Você venceu!!! +" . $ganhou . " seu total de pontos é " . $win;
}
else{
    echo "Você perdeu!!! +" . $perdeu . " seu total de pontos é " . $loser;
}



?>