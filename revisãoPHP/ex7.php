<?php

$altura = $_POST['altura'];
$peso = $_POST['peso'];

if($altura > 3){
    $altura = $altura / 100;
}

$imc = $peso / pow($altura, 2);

echo "<h1>Calcular IMC</h1><br>";
echo "Seu IMC é: $imc";

?>