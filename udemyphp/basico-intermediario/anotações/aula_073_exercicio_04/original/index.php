<?php

$erro = "";
$sucesso = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["texto1"])) {
        $erro = "Campo de texto vazio!";
    } else {
        $valor =  $_POST['texto1'];

        if (is_numeric($valor)) {
            $file = fopen("dados_numericos", "a");
            fputs($file, $valor . PHP_EOL);
            fclose($file);

            $sucesso = "Valor numérico guardado com sucesso!";
        } elseif (is_string($valor)) {
            $file = fopen("dados_string", "a");
            fputs($file, $valor . PHP_EOL);
            fclose($file);

            $sucesso = "Valor string guardado com sucesso!";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
</head>
<body class="bg-dark d-flex flex-column justify-content-center align-items-center">

    <div class="card p-4 bg-light col-sm-4 mt-5">
        <h3>Login</h3>
        <hr>
        <form action="index.php" method="post">
            <div class="mb-3">
                <label for="texto1" class="form-label">Insira um Texto:</label>
                <input type="text" id="texto1" name="texto1" class="form-control" placeholder="Digite algo..." required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary px-4">Entrar</button>
            </div>
        </form>
    </div>

    <div class="card p-4 bg-light col-sm-4 mt-5">
        <p class="text-black m-auto"><?= !empty($erro) ? $erro : $sucesso?></p>
    </div>

</body>
</html>
