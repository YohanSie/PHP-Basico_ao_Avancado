<?php

require_once 'index1.php';

use Humanos\Humanos;

$dados = [
    ['m', 'João Ribeiro'],
    ['f', 'Ana Silva'],
    ['M', 'Carlos Martins'],
    ['m', 'Joaquim Santos'],
    ['f', 'Marta Rodrigues'],
    ['M', 'Rui Fernandes'],
    ['f', 'Márcia Antunes'],
    ['g', 'Pantufa'],
    ['f', 'Carla Maria'],
    ['M', 'Fernando Joaquim'],
    ['m', 'Ricardo Moita'],
    ['c', 'Lassie'],
    ['F', 'Daniela Cardoso'],
    ['F', 'Susana Dinis']
];

$humanos = new Humanos();

foreach ($dados as $dado) {
    $humanos->definir($dado[0], $dado[1]);
}

$masc = $humanos->viewMasc();
$femi = $humanos->viewFemi();
$desc = $humanos->viewDesc();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercicio 01</title>
</head>
<body>

    <h1>Masculinos</h1>
    <ul>
        <?php foreach ($masc as $nome): ?>
            <li><?= $nome ?></li>
        <?php endforeach; ?>
    </ul>
    <h1>Femininos</h1>
    <ul>
        <?php foreach ($femi as $nome): ?>
            <li><?= $nome ?></li>
        <?php endforeach; ?>
    </ul>
    <h1>Desconhecidos</h1>
    <ul>
        <?php foreach ($desc as $nome): ?>
            <li><?= $nome ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>
