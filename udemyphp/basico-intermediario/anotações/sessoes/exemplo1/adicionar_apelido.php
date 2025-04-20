<?php

session_start();
$_SESSION['apelido'] = "Loiro";
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar Apelido</title>
</head>
<body>
    <?php require_once 'nav.php' ?>

    <hr>
    <h2>Valor de 'apelido' adicionado à sessão</h2>

</body>
</html>
