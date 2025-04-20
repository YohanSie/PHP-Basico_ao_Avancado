<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleatório</title>
    <link rel="stylesheet" href="/cursophp/style.css">
</head>

<body>
    <section>
        <h1>Número Aleatório</h1>
        <?php

        $randnum = random_int(0, 100);

        echo "<p>Gerando um número aleatório entrer 0 e 100...</p>";
        echo "<p>O valor gerado foi <b>$randnum</b></p>";

        ?>

        <input type="button" value="🔃 Voltar" onclick="window.location.reload(true);"> // ou javascript:document.location.reload()
    </section>
</body>

</html>