<?php

// dados de ligação
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = 'teste123';

// ligação
$ligacao = new PDO("mysql:host=localhost;port=3307;dbname=$database;charset=utf8", $username, $password);

$parametros = [
    ':u' => $_POST['text_username'],
    ':p' => $_POST['text_passwrd']
];

$comando = $ligacao->prepare("SELECT * FROM usuarios WHERE username = :u AND passwrd = :p");
$comando->execute($parametros);
$resultados = $comando->fetchAll(PDO::FETCH_OBJ);

echo '<pre>';
print_r($resultados);

if(count($resultados) == 0){
    echo 'Login inválido.<br>';
} else {
    echo 'Login OK!<br>';
}

// vamos testar a expressão ' or ''=' no campo da password
// já não vamos ter o problema anterior