<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="/cursophp/style.css">
</head>

<body>
    <?php
    // Capturando os dados do Formulário Retroalimentado
    $num = $_GET['num'] ?? null;

    ?>
    <main>
        <!-- Formulário com entrada de valores; -->
        <h1>Informe um Número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">Número: </label>
            <input type="number" name="num" id="num" value="<?= $num ?>">

            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <?php

    if (empty($num)) {
        echo "";
    }
    elseif ($num !== null) {
        $raizquadrada = $num ** (1/2);
        $raizcubica = $num ** (1/3);
        echo "
        <section id=\"resultado\">
            <h2>Resultado Final</h2>
            <p>Analisando o <b>número $num,</b> temos: </p>
            <ul>
                <li>A sua raiz quadrada é " . number_format($raizquadrada, 3, ',', '.') . "</li>
                <li>A sua raiz cúbica é " . number_format($raizcubica, 3, ',', '.') . "</li>
            </ul>
        </section>
        ";
    }

    ?>

</body>

</html>