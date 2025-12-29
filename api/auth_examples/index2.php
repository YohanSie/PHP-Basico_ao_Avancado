<?php
session_start();

// ==========================================
// Verifica se tem token na sessão
// ==========================================
if(empty($_SESSION['jwt_token'])){
    die('Você precisa fazer login primeiro!');
}

// ==========================================
// Faz requisição para API protegida
// ==========================================
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://localhost/PHP-Basico_ao_Avancado/api/test_api_2/05_endpoint_jwt_01/',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer ' . $_SESSION['jwt_token']
    ),
));

$response = curl_exec($curl);
$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);

// ==========================================
// Exibe resposta
// ==========================================
echo "HTTP Code: $httpCode<br>";
echo "<pre>";
echo $response;
echo "</pre>";

$data = json_decode($response, true);

if($data['status'] == 'success'){
    echo "<hr>";
    echo "✅ Acesso autorizado para: " . $data['usuario'];
} else {
    echo "<hr>";
    echo "❌ Erro: " . $data['message'];
}