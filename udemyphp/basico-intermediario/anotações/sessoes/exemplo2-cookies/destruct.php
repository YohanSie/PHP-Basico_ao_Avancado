<?php
session_name('minha_sessao');
session_set_cookie_params(60*3);
session_start();

session_unset();

session_destroy();

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
    <h2>Sessão Destruida</h2>
</body>
</html>
