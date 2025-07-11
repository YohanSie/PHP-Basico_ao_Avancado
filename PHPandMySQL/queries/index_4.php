<?php

// OBTER RESULTADOS COM EXECUÇÃO DE QUERIES

/*
Se usármos o método fetchAll()...
*/

// configurações
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = 'teste123';

// ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);
$resultados = $ligacao->query("SELECT * FROM produtos;")->fetchAll();

foreach($resultados as $linha)
{
    echo 'Produto: <b>' . $linha['produto'] . '</b> </br>Preço: <b>' . $linha['preco_unidade'] . '</b><br>';
}

// fecho da ligação
$ligacao = null;

/* 
O que aconteceu aqui?
A query devolve um conjunto de resultados.
O ciclo foreach percorreu cada uma das linhas do resultado,
apresentando apenas o nome.

Vamos ver no próximo vídeo como podemos definir de que
forma os resultados podem chegar até nós e vamos perceber
melhor como os resultados são preparados para que os
possamos usar nas nossas aplicações.
*/