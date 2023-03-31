<?php

$termo = $_POST['termo'];
$quant = $_POST['quant'];
$razao = $_POST['razao'];

echo "<h1>Avaliação prática - 2°C</h1><br>";
echo "<h3>Progressão Geométrica</h3><br>";

for($i = 1;$i <= $quant;$i++){
    echo "a $i ... $termo <br>";
    $termo = $termo * $razao;
}

?>