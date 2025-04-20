<?php

require_once 'index1.php';

use classes_abstract\Automovel;
use classes_abstract\Aviao;
use classes_abstract\Barco;

$veiculos = [];

if (($file = fopen('dados.csv', 'r')) !== false) {
    while (($linha = fgetcsv($file, 0, ',', '"', "\\")) !== false) {
        $classe = match ($linha[0]) {
            'automovel' => Automovel::class,
            'aviao' => Aviao::class,
            'barco' => Barco::class,
            default => null,
        };
        if ($classe) {
            $veiculos[] = new $classe($linha);
        }
    }
    fclose($file);
}

$tipos = ['automovel' => 'Automóveis', 'aviao' => 'Aviões', 'barco' => 'Barcos'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
<?php foreach ($tipos as $tipo => $titulo): ?>
    <h1><?= $titulo ?></h1>
    <ul>
        <?php foreach ($veiculos as $veiculo): ?>
            <?php if ($veiculo->getTipo() === $tipo): ?>
                <li><?= $veiculo->apresentar() ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
    <hr>
<?php endforeach; ?>
</body>
</html>
