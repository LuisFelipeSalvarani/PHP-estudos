<?php

$valor = $_POST['valor'];
$desconto = $valor * 0.07;
$valor_final = $valor - $desconto;

echo "<h1>Calcular Desconto</h1><br><br>";
echo "Valor: $valor <br><br>";
echo "Valor do desconto: $desconto <br><br>";
echo "Valor final: $valor_final";

?>