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
if(!isset($_GET['id'])){
    $res['status'] = 'error';
    $res['message'] = 'Client id not defined.';
    $res['time_response'] = time();
    echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
}

$id = $_GET['id'];

$clients = require_once('../_data/clients.php');

if($id < 1 || $id > count($clients)){
    $res['status'] = 'error';
    $res['message'] = 'Client id is invalid.';
    $res['time_response'] = time();
    echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit; 
}

$res['status'] = "success";
$res['client'] = $clients[$id-1];
$res['client_id'] = $id;
$res['time_response'] = time();
echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
