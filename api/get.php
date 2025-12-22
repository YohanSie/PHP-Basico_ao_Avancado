<?php

$url = 'http://localhost/PHP-Basico_ao_Avancado/api/test_api_1/get_all_clients/';

$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 10
]);

$response = curl_exec($curl);
$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

if (curl_errno($curl)) {
    echo 'Erro: ' . curl_error($curl);
} else {
    echo $response;
}

$curl = null;