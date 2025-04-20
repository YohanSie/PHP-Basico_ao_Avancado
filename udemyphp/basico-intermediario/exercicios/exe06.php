<?php
    $mensagem_erro = 'ERROR 404 - PAGE NOT FOUND';

    $css = '';
    $mensagem = null;

    if(!empty($mensagem_erro)){
        $css = 'erro';
        $mensagem = $mensagem_erro;
    } else {
        $css = 'sucesso';
        $mensagem = "SUCESSO";
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 06</title>
    <style>
        .sucesso {
            color: darkgreen;
        }
        .erro {
            color: darkred;
        }
    </style>
</head>
<body>
    <div class="<?= $css ?>">
        <h1>Message of ERROR</h1>
        <p><?= $mensagem ?></p>
    </div>

</body>
</html>