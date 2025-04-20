<?php
    $lojas = [
        'lisboa' => 'lisboa@gmail.com',
        'porto' => 'porto@gmail.com',
        'coimbra' => 'coimbra@gmail.com'
    ];

    $cidade = 'porto';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 05</title>
</head>
<body>
    <h1>Array with email of the stores of any cities</h1>
    <?php if(key_exists($cidade, $lojas)): ?>
        <h3><?= "Cidade: " . $cidade ?></h3>
        <p><?= "Email da cidade: " . $lojas[$cidade] ?></p>
    <?php else: ?>
        <p>Não existe loja cadastrada na cidade de $cidade</p>
    <?php endif; ?>
</body>
</html>