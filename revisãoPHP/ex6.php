<?php

$n1 = $_POST['nota1'];
$n2 = $_POST['nota2'];

$media = ($n1 + $n2) / 2;

if($media >= 7){
    echo "<h1>Calcular Média</h1><br>";
    echo "Sua média é: $media";
}else{
    echo "<h1>Calcular Média</h1><br>";
    echo "Aluno reprovado";
}

?>