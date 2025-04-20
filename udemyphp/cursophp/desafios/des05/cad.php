<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números</title>
    <link rel="stylesheet" href="/cursophp/style.css">
</head>

<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php

        $num = $_GET['numreal'] ?? 0;
        $inteira = floor($num); // ou (int) num;
        $fracao = $num - $inteira;

        echo "<p>Analisando o número <b>" . number_format($num, 3, ',', '.') . "</b> informado pelo usuário:</p>";
        echo "<ul><li>A parte inteira do número é <b>" . number_format($inteira, 0, '', '.') . "</b></li>";
        echo "<li>A parte fracionária do número é <b>" . number_format($fracao, 3, ",", '.') . "</b></li></ul>";
        ?>


        <input type="button" value="Voltar" onclick="window.location.href='index.html';">
    </main>
</body>

</html>