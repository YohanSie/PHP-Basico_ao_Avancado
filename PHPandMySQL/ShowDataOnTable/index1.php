<?php

/*
APRESENTAR OS DADOS NUMA TABELA DE HTML

Vamos fazer um exercício muito simples.
Carregar os dados dos clientes. Só vamos carregar os primeiros 20.
Depois vamos apresentar numa tabela formatada com Bootstrap.
E vamos apresentar o total de clientes listados.
*/

// dados de ligação
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = 'teste123';

// ligação
$connection = new PDO("mysql:host=localhost;dbname=$database;charset=utf8", $username, $password);

$result = $connection->query("SELECT * FROM clientes LIMIT 20")->fetchAll(PDO::FETCH_OBJ);

$connection = null;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO - Apresentação de dados de uma query SQL</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="conteiner-fluid">
        <div class="row">
            <div class="col">
                <h3>Clientes: </h3>
                <hr>
                <table class="table table-bordered table-striped">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>Nome</th>
                            <th>Sexo</th>
                            <th>Data Nascimento</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Endereço</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($result as $cliente): ?>
                            <tr>
                                <td><?= $cliente->nome ?></td>
                                <td><?= $cliente->sexo == 'm' ? 'Masculino' : 'Feminino' ?></td>
                                <td><?= substr($cliente->data_nascimento, 0, 10) ?></td>
                                <td><?= $cliente->email ?></td>
                                <td><?= $cliente->telefone ?></td>
                                <td><?= $cliente->morada . ' - ' . $cliente->cidade?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <p class="mt-3">Total: <b><?= count($result) ?></b></p>

            </div>
        </div>
    </div>
</body>
</html>
