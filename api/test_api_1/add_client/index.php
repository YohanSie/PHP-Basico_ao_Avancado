<?php

header("Content-Type: application/json; charset=UTF-8");

if($_SERVER['REQUEST_METHOD'] != "POST"){
    $msg['status'] = 'error';
    $msg['mensagem'] = 'Invalid HTTP method';
    $msg['time_response'] = time();
    echo json_encode($msg, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
}

if(empty($_POST['new_client'])){
    $msg['status'] = 'error';
    $msg['mensagem'] = 'New Client is not defined';
    $msg['time_response'] = time();
    echo json_encode($msg, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
}

try {
    $new_client = $_POST['new_client'];
    $file = fopen(__DIR__ . '/../_data/data.txt', 'a');
    fputs($file, PHP_EOL . $new_client);
    fclose($file);

    $msg['status'] = 'success';
    $msg['mensagem'] = 'Client added with success';
    $msg['time_response'] = time();
    echo json_encode($msg, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);


} catch(\Throwable $th){
    $msg['status'] = 'error';
    $msg['mensagem'] = 'Unexpected Error';
    $msg['time_response'] = time();
    echo json_encode($msg, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
}