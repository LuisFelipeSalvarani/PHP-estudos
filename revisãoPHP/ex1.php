<?php

$raio = $_POST['raio'];
$pi = $_POST['pi'];
$area = $pi * pow($raio, 2);

echo "<h1>Calcular a Área da Circunferência</h1><br>";
echo "A área da circunferência é: $area";

?>