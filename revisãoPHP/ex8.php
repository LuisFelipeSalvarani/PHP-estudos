<?php

$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$idade = $_POST['idade'];

if($sexo == 'm'){
    if($idade >= 18){
        echo "<h1>Alistamento Militar</h1><br>";
        echo "$nome, você já pode realizar o seu alistamento militar.";
    }else{
        echo "<h1>Alistamento Militar</h1><br>";
        echo "$nome, você só pode se alistar quando completar 18 anos.";
    }
}else{
    echo "<h1>Alistamento Militar</h1><br>";
        echo "$nome, você não pode se alistar.";
}

?>