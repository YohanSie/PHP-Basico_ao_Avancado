<?php 
/*
Vamos efetuar um pedido de login à API para perceber se vamos
receber um token que depois vamos usar nos restantes pedidos.
*/
session_start();

$usuario = "aminhaaplicacao";
$senha = "aminhasenha";

$login = json_decode(login($usuario, $senha), true);

if($login['status'] == 'success'){
    $_SESSION['jwt_token'] = $login['jwt_token'];
    die('Login efetuado com sucesso.');
} else {
    die('Login inválido.');
}

function login($usuario, $senha)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost/PHP-Basico_ao_Avancado/api/test_api_2/04_endpoint_jwt_auth/',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('usuario' => $usuario, 'senha' => $senha),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}