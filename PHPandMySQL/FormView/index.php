<?php

use sys4soft\Database;

// importar a class Database e configurações
require_once 'Database.php';

// instanciação de objeto Database
$config = [
    'host' => 'localhost',
    'database' => 'os_meus_clientes',
    'username' => 'user_meus_clientes',
    'password' => '45tA873IwA8a8aYIg53ud6lA6aQiTO',
    'port' => '3308'
];

// instancia de objeto
$database = new Database($config);

// inserir os dados do cliente
$results = $database->execute_query("SELECT * FROM clientes");

// echo "<pre>";
// print_r($result);
// die();

// Resultados
$affected_rows = $results->affected_rows;
$results = $results->results;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PDO - Apresentar dados</title>
    <style>
        body {
            font-family: 1px solid gray;
            padding: 20px;
        }

        .caixa-cliente {
            border: 1px solid gray;
            margin: 5px;
            padding: 10px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <h3>DADOS DOS MEUS CLIENTES</h3>

    <!-- apresentação dos dados -->
    <?php if ($affected_rows == 0): ?>
        <p>Não foram encontrados dados para apresentar</p>
    <?php else: ?>
        <?php foreach ($results as $result): ?>
            <p>Nome: <strong><?= $result->nome ?></strong></p>
            <p>Email: <strong><?= $result->email ?></strong></p>
            <hr>
        <?php endforeach; ?>
    <?php endif; ?>

    <p>Total: <strong><?= $affected_rows ?></strong> Cliente(s)</p>
</body>

</html>