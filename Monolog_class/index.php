<?php

define('CONTROL', true);

// composer autoload
require_once 'vendor/autoload.php';

// i,porta a função de registro de logs
require_once 'logger.php';

// router
$a = "";
if (isset($_GET['a'])) {
    $a = $_GET['a'];
}

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registo de logs</title>
    <style>
        .center {
            text-align: center;
        }
    </style>
</head>

<body>

    <?php

    // nav
    require_once('nav.php');

    // pages
    $pageHandler = match ($a) {
        '1' => function () {
            logger('Foi visitada a página um');
            require_once('pagina1.php');
        },
        '2' => function () {
            logger('Foi visitada a página dois');
            require_once('pagina2.php');
        },
        '3' => function () {
            logger('Foi visitada a página três');
            require_once('pagina3.php');
        },
        default => function () {
            logger('Foi visitada a página inicial');
            print('<hr><h1 class="center">Início</h1>');
        }
    };

    $pageHandler();

    ?>

</body>

</html>