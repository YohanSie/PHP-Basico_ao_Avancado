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

// check if total_clients is defined
if(!isset($_GET['total_clients'])){
    $res['status'] = 'error';
    $res['message'] = 'Total clients not defined.';
    $res['time_response'] = time();
    echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
}

$total_clients = $_GET['total_clients'];

$clients = require_once('../_data/clients.php');
$final_clients = array_slice($clients, 0, $total_clients);

$res['status'] = "success";
$res['clients'] = $final_clients;
$res['total_clients'] = $total_clients;
$res['time_response'] = time();
echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
