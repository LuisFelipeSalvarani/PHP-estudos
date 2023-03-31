<?php

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$delta = pow($b, 2) - (4 * $a * $c);

if($delta >= 0){
    $x1 = (-($b) + sqrt($delta)) / (2 * $a);
    $x2 = (-($b) - sqrt($delta)) / (2 * $a);
    $x1 = round($x1, 2);
    $x2 = round($x2, 2);
    echo "<h1>Solução</h1><br>";
    echo "O valor de delta é: $delta <br>";
    echo "O valor de x1: $x1 <br>";
    echo "O valor de x2: $x2";
}else{
    echo "<h1>Solução</h1><br>";
    echo "O valor de delta é: $delta <br>";
    echo "A equação não possui raízes reais";
}

?>