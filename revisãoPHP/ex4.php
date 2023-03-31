<?php

$valor = $_POST['valor'];
$valor2 = $_POST['valor2'];

$desconto = $valor * 0.08;
$desconto2 = $valor2 * 0.11;

$valor_desconto = $valor - $desconto;
$valor_desconto2 = $valor2 - $desconto2;

$valor_final = $valor_desconto + $valor_desconto2;

echo "<h1>Calcular Desconto</h1><br><br>";
echo "Valor final: $valor_final";

?>