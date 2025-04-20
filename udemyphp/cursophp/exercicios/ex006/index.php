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
    // Capturando os dados do Formukário Retroalimentado
    $valor1 = $_GET['v1'] ?? null;
    $valor2 = $_GET['v2'] ?? null;
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?= $valor2 ?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <?php
    if ($valor1 !== null && $valor2 !== null) {
        $soma = $valor1 + $valor2;
        echo "
        <section id=\"resultado\">
            <h2>Resultado da Soma</h2>
            <p>A soma entre os valores $valor1 e $valor2 é igual a <b>$soma</b></p>
        </section>
    ";
    }
    ?>

</body>

</html>