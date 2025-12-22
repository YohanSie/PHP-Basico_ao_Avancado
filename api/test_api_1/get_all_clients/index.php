<?php
header("Content-Type: application/json; charset=UTF-8");    

// check if request method is GET
if($_SERVER['REQUEST_METHOD'] != 'GET'){
    $res['status'] = 'error';
    $res['message'] = 'Invalid HTTP request method.';
    $res['time_response'] = time();
    echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
}

$clients = require_once('../_data/clients.php');
$res['status'] = "success";
$res['clients'] = $clients;
$res['time_response'] = time();
echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
