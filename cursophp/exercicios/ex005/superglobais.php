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
    <main>
        <pre>
            <?php
            setcookie("dia-da-semana", "QUINTA", time() + 3600);

            session_start();
            $_SESSION["teste"] = "FUNCIONOU!";

            echo "<h1>SuperGlobal GET</h1>";
            var_dump($_GET); // Query String = Solicitação (passado pela url por ex...)

            echo "<h1>SuperGlobal POST</h1>";
            var_dump($_POST);

            echo "<h1>SuperGlobal REQUEST</h1>";
            var_dump($_REQUEST);

            // OUTRAS SUPERGLOBAIS -> $_COOKIE, $_FILES, $_SESSION, $_ENV, $_SERVER, $GLOBALS

            echo "<h1>SuperGlobal COOKIE</h1>";
            var_dump($_COOKIE);

            echo "<h1>SuperGlobal SESSION</h1>";
            var_dump($_SESSION);

            echo "<h1>SuperGlobal ENV</h1>";
            var_dump($_ENV);
            //foreach (getenv() as $c => $v){
            //    echo "$c - $v <br>";
            //}

            echo "<h1>SuperGlobal SERVER</h1>";
            var_dump($_SERVER);

            echo "<h1>SuperGlobal GLOBALS</h1>";
            var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>

</html>