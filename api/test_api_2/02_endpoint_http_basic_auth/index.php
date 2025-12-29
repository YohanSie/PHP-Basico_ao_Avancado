<?php

header("Content-Type: application/json; charset=UTF-8");

$credenciais = [
    'omeuusuario' => 'aminhasenha'
];

// check if HTTP basic authentication is ok
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    $res['status'] = 'error';
    $res['message'] = 'Acesso inválido.';
    $res['time_response'] = time();
    echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
} else {

    // get user and password from the HTTP request header
    $username = $_SERVER['PHP_AUTH_USER'];
    $password = $_SERVER['PHP_AUTH_PW'];

    // check if user data is ok
    if (!key_exists($username, $credenciais) || $credenciais[$username] != $password) {
        $res['status'] = 'error';
        $res['message'] = 'Acesso inválido.';
        $res['time_response'] = time();
        echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        exit;
    }
}

$res['status'] = 'success';
$res['message'] = 'Acesso a um endpoint com autenticação HTTP Basic Auth';
$res['time_response'] = time();
echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
