<?php

// CONTROLAR COMUNICAÇÕES COM TRANSAÇÕES

/*
Vê como é simples controlar eventuais erros num processo de comunicação.
Adicionei um beginTransaction() antes de iniciar as comunicações.
Depois as comunicações.
No final, não existindo nenhum erro, surge o commit()
O commit() vai consolidar na base de dados todas as comunicações definidas.

No caso de acontecer um erro, como é o caso, as 3 primeiras inserções não vão ser aplicadas, porque vai ser disparada a exceção e, dentro do bloco do catch, temos um rollBack().

O rollBack() indica que tudo o que foi inserido com sucesso, dentro da transação, deve ser revertido.
*/

$database = "udemy_loja_online";
$username = "user_loja_web";
$password = "teste123";

$conection = new PDO("mysql:host=localhost; port=3307; dbname=$database",$username, $password);

try {

    $conection->beginTransaction();
    $conection->exec("INSERT IGNORE usuarios VALUES(0, 'user1', '111')");
    $conection->exec("INSERT IGNORE usuarios VALUES(0, 'user2', '222')");
    $conection->exec("INSERT IGNORE usuarios VALUES(0, 'user3', '333')");

    // ERRO PROPOSITAL - concertado
    $conection->exec("INSERT IGNORE usuarios VALUES(0, 'user4', '444')");
    $conection->commit();

} catch (PDOException $e) {

    $conection->rollBack();
    echo "Aconteceu um erro no SQL!<br>" . $e->getMessage();

}

$conection = null;
