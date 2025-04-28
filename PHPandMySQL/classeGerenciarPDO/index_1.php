<?php

// CONCLUSÃO SOBRE O QUE VIMOS ATÉ AGORA

/* 
Esta foi a estrutura que usámos durante os primeiros vídeos deste módulo.
*/

// dados de ligação
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = 'udemy123';

// ligação
$connection = new PDO("mysql:host=localhost;port=3307;dbname=$database;charset=utf8", $username, $password);

// carregar os dados (em formato de array de objetos)
$results = $connection->query("SELECT * FROM clientes LIMIT 20")->fetchAll(PDO::FETCH_OBJ);

// fechar a ligação
$ligacao = null;

echo "DEU CERTO!";
/* 
Imagina que vais ter que conectar várias vezes à base de dados!
Vamos melhorar o nosso código. Vamos torná-lo modelar.
Vamos fazer ainda melhor: Vamos criar uma classe que pode ser
usada em qualquer projeto.

Queremos:
- uma classe que possa ser usada em qualquer projeto
- que permita efetuar todas as operações CRUD SQL
- que permita fazer queries básicas ou parametrizadas
- que permita configurar a ligação, e a forma como os dados são devolvidos
- que controle erros e nos devolva essa informação
- que nos possa devolver outras informações relevantes

IMPORTANTE: Este exercício é um bom ponto de partida para criares a tua
própria classe. Podes usar este código como pronto inicial.
Vai ficar completamente funcional mas NÃO DEVES USAR EM PRODUÇÃO.

*/