<?php

// dados de ligação
$database = 'nova_base_dados';
$username = 'root';
$password = 'root';

// conexão
$ligacao = new PDO("mysql:host=localhost;port=3307;charset=utf8", $username, $password);

// destruir a nase de dados, caso ela exista
$ligacao->exec("DROP DATABASE IF EXISTS `$database`");

// criar a base de dados
$ligacao->exec("CREATE DATABASE IF NOT EXISTS `$database`");

// indicar à conexão qual a base de dados que vai ser usada
$ligacao->exec("USE $database");

$ligacao->exec(
    "CREATE TABLE usuarios (" . 
    "`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, " . 
    "`usuario` VARCHAR(30) NULL DEFAULT NULL, " . 
    "`senha` VARCHAR(100) NULL DEFAULT NULL, " . 
    "`created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP" .
    ")"
);

// destruir a conexão
$ligacao = null;

echo 'Terminado';