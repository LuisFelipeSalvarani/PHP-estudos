<?php

$nome = $_POST['nome'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$cliente = "Nome: $nome - CEP: $cep - Endereço: $rua - Bairro: $bairro - Cidade: $cidade - Estado: $estado";

$arquivo = "banco.txt";

$fp = fopen($arquivo, "a+");

fwrite($fp, $cliente);

fclose($fp);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ViaCEP Webservice</title>
</head>

<body>
    <section class="home">
        <div class="box">
            <h1>Cliente Cadastrado</h1>
            <form method="post" action="../aula-api/cadastro-cliente.php">
                <label>Nome: <?= $nome ?></label><br><br>
                <label>CEP: <?= $cep ?></label><br><br>
                <label>Endereço: <?= $rua ?></label><br><br>
                <label>Bairro: <?= $bairro ?></label><br><br>
                <label>Cidade: <?= $cidade ?></label><br><br>
                <label>Estado: <?= $estado ?></label><br><br>
        </div>
    </section>
    </form>
    <a style="display:none;" href="https://viacep.com.br/ws/13970005/json/?callback=meu_callback">Chamando JSON</a>
</body>

</html>