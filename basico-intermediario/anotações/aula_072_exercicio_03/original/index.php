<?php

// criar a função aqui ...
function div($valor1, $valor2){
    try {
        $resultado = $valor1 / $valor2;
        return "$valor1 : $valor2 = " . number_format($resultado, 3);
    } catch (Throwable $th) {
        $valor2 = null;
        if($valor2 === null){
            return "Divisão por zero!";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Nível 1 - Exercício 02</title>
</head>

<body>

    <?php for ($i = 0; $i <= 20; $i++) : ?>

        <?php 
            $valor1 = rand(0,10);
            $valor2 = rand(0,10);
        ?>

        <!-- apresentar os valores aqui -->
        <p><?= div($valor1, $valor2) ?></p>

    <?php endfor; ?>


</body>

</html>