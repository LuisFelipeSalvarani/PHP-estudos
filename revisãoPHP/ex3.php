<?php

$altura = $_POST['altura'];
$largura = $_POST['largura'];
$profundidade = $_POST['profundidade'];

$volume = $altura * $largura * $profundidade;

echo "<h1>Calcular o Volume do Paralelepípedo</h1><br>";
echo "O volume é: $volume";
?>