<?php

// CONTROLAR COMUNICAÇÕES COM TRANSAÇÕES

/*
A transação é um mecanismo processual de comunicação
com a base de dados no qual podemos efetuar um conjunto de
instruções SQL e, caso aconteça um erro, podemos "voltar atrás"
nas execuções que foram efetuadas. No caso de haver sucesso,
podemos finalizar essas comunicações todas.

Vamos ver com um exemplo.
*/

$database = "udemy_loja_online";
$username = "user_loja_web";
$password = "teste123";

$conection = new PDO("mysql:host=localhost; port=3307; dbname=$database",$username, $password);

try {

    $conection->exec("INSERT usuarios VALUES(0, 'user1', '111')");
    $conection->exec("INSERT usuarios VALUES(0, 'user2', '222')");
    $conection->exec("INSERT usuarios VALUES(0, 'user3', '333')");

    // ERRO PROPOSITAL
    $conection->exec("INSERT users VALUES(0, 'user4', '444')");

} catch (PDOException $e) {

    echo "Aconteceu um erro no SQL!<br>" . $e->getMessage();

}

$conection = null;
