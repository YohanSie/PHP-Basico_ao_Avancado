<?php

// dados de ligação
$database = 'udemy_loja_online';
$username = 'root';
$password = 'root';

// ligação
$ligacao = new PDO("mysql:host=localhost;port=3307;dbname=udemy_loja_online;charset=utf8", "$username", "$password");

$user = $_POST['text_user'];
$passwrd = $_POST['text_passwrd'];

$sql = "SELECT * FROM usuarios WHERE username='$user' and passwrd='$passwrd'";

$resultados = $ligacao->query($sql)->fetchAll(PDO::FETCH_OBJ);

// fechar a ligação
$ligacao = null;

echo '<pre>';
print_r($resultados);
echo '<br>';

// analisar se houve login válido
if(count($resultados) == 0){
    echo 'Login inválido.';
} else {
    echo 'Login OK!';
}

// agora vamos colocar a seguinte expressão na password: ' or ''='

echo '<br><br>' . $sql;