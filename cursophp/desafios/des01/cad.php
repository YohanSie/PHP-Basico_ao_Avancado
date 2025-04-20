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
    <section>
        <h1>Antecessor e Sucessor</h1>
        <?php

        $num = $_GET["num"] ?? 0;
        $antecessor = $num - 1;
        $sucessor = $num + 1;

        echo "<p>O número escolhido foi <b>$num</b></p>";
        echo "<p>O número antecessor é $antecessor</p>";
        echo "<p>O número sucessor é $sucessor</p>";
        ?>

        <input type="button" value="Voltar" onclick="window.location.href='desafio01.html';">
    </section>
</body>

</html>