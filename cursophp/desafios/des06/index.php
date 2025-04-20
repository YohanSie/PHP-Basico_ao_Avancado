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
    $dividendo = $_GET['dividendo'] ?? null;
    $divisor = $_GET['divisor'] ?? null;
    ?>
    <main>
        <!-- Formulário com entrada de valores; -->
        <h1>Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo: </label>
            <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo ?>">
            <label for="divisor">Divisor: </label>
            <input type="number" name="divisor" id="divisor" value="<?= $divisor ?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <?php
    if ($dividendo !== null && $divisor !== null) {
        $quociente = intdiv($dividendo, $divisor); 
        $resto = $dividendo % $divisor;
    ?>

    <section id=\"resultado\">
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
    <?php
    };

    ?>

</body>

</html>