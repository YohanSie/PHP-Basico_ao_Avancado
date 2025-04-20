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
    $payment = $_GET['payment'] ?? null;
    $paymin = 1518;

    $padrao = numfmt_create('pt_BR', style: NumberFormatter::CURRENCY);
    ?>
    <main>
        <!-- Formulário com entrada de valores; -->
        <h1>Informe seu Salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="payment">Sálario (R$): </label>
            <input type="number" name="payment" id="payment" value="<?= $payment ?>">

            <?= "<p>Considerando o salário minímo de <b>" . numfmt_format_currency($padrao, $paymin, 'BRL') . "</b></p>" ?>

            <input type="submit" value="Somar">
        </form>
    </main>
    <?php

    if ($payment !== null) {
        $qtde = intdiv($payment, $paymin);
        $resto = $payment - ($paymin * $qtde);
        echo "
        <section id=\"resultado\">
            <h2>Resultado Final</h2>
            <p>Quem recebe um salário de $payment ganha $qtde salário(s) mínimo(s) + " . numfmt_format_currency($padrao, $resto, 'BRL') . "</b></p>
        </section>
        ";
    }
    ?>

</body>

</html>