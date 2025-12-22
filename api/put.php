<?php

$url = 'http://localhost/PHP-Basico_ao_Avancado/api/test_api_1/update_client/';

$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 10,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_CUSTOMREQUEST => 'PUT',
    CURLOPT_POSTFIELDS => '{
        "id": 4,
        "new_name": "Maria José"
    }',
    CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
]);

$response = curl_exec($curl);
$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

if (curl_errno($curl)) {
    echo 'Erro: ' . curl_error($curl);
} else {
    echo $response;
}

$curl = null;