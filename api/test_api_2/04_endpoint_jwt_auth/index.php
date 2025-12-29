<?php
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

require_once __DIR__ . '/../../vendor/autoload.php';
header("Content-Type: application/json; charset=UTF-8");

// FUNÇÃO AQUI NO TOPO
function gerarJWT($usuario, $senha)
{
    $key = 'dVIns6oTyVvsnYzmaTyh3YPS7alsyCFt';
    $payload = [
        'usuario' => $usuario,
        'senha' => $senha,
        'iss' => 'localhost',
        'aut' => 'localhost',
        'iat' => time(),
        'exp' => time() + 360,
    ];
    $jwt_token = JWT::encode($payload, $key, 'HS256');
    return $jwt_token;
}

// simulates the user login
$users = [
    'aminhaaplicacao' => 'aminhasenha',
    'outraaplicacao' => 'outrasenha'
];

// check request data
if ($_SERVER['REQUEST_METHOD'] != 'POST' || empty($_POST['usuario']) || empty($_POST['senha'])) {
    $res['status'] = 'error';
    $res['message'] = 'Access denied.';
    $res['time_response'] = time();
    echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
}

// check valid login
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if (!key_exists($usuario, $users) || $users[$usuario] != $senha) {
    $res['status'] = 'error';
    $res['message'] = 'Access denied.';
    $res['time_response'] = time();
    echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
}

$res['status'] = 'success';
$res['jwt_token'] = gerarJWT($_POST['usuario'], $_POST['senha']);
$res['time_response'] = time();
echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
exit;