<?php

header("Content-Type: application/json; charset=UTF-8");

// simulates the total amount of API keys distributed by registered clients
$valid_keys = [
    'cliente_um' => '4KPd2BEqPteIQrrxoY9TPtnVhsarhKk6',
    'cliente_dois' => 'Eg4gDy8zH9D0dpPeN2pAm9kLYhyKEiS9',
    'cliente_três' => 'JYaDgZyHnHHy40CUGrtNI6Ckf9AILY9Y'
];

// check if the api_key header is present
$headers = getallheaders();
if(!key_exists('api_key', $headers)){
    $res['status'] = 'error';
    $res['message'] = 'Acesso inválido.';
    $res['time_response'] = time();
    echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
}

// check if the api_key is valid in the registered clients
if(!in_array($headers['api_key'], $valid_keys)){
    $res['status'] = 'error';
    $res['message'] = 'Acesso inválido. Cliente desconhecido.';
    $res['time_response'] = time();
    echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
}

$api_key = $headers['api_key'];
$client = array_search($headers['api_key'], $valid_keys);

$res['status'] = 'success';
$res['message'] = 'Acesso a um endpoint com autenticação API Key. Cliente: ' . $client;
$res['time_response'] = time();
echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);