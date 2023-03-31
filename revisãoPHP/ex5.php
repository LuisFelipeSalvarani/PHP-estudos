<?php

$c = $_POST['celsius'];

$f = (9 * $c + 160) / 5; 

echo "<h1>Converter Celsius em Fahrenheit</h1><br><br>";
echo "A temperatura em Graus Fahrenehit é: $f";

?>