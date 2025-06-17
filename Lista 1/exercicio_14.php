<?php
$media = 0;
$notas = [
     "Lucas; " => 8.0,
     "Raphael; " => 8.7,
     "Henrique; " => 9.8
];

foreach ($notas as $key => $value) {
    echo "". $key ." ". $value . " <br> ";
    $media = $media + $value;
}

$total = $media/3; 
echo "A média de notas dos 3 alunos é; ". number_format($total, 1);


?>