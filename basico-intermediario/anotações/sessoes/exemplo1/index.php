<?php

session_start();

$nome = $_SESSION['nome'] ?? '-';
$apelido = $_SESSION['apelido'] ?? '-';

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index of sessions</title>
</head>
<body>

    <?php require_once 'nav.php' ?>

    <hr>
    <h2>Exercício com sessoes de PHP</h2>

    <h3>Valor da variável 'nome':</h3>
    <h1><?= $nome ?></h1>

    <h3>Valor da variável 'apelido':</h3>
    <h1><?= $apelido ?></h1>

</body>
</html>
