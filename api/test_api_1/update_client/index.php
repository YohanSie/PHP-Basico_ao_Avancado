<?php

header("Content-Type: application/json; charset=UTF-8");    

// check if request method is PUT
if ($_SERVER['REQUEST_METHOD'] != 'PUT') {
    $res['status'] = 'error';
    $res['message'] = 'Invalid HTTP request method.';
    $res['time_response'] = time();
    echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
}

// validates JSON data
$data = json_decode(file_get_contents("php://input"), true);

// check if new_client is defined
if (!isset($data['id']) || !isset($data['new_name'])) {
    $res['status'] = 'error';
    $res['message'] = 'ID or new name is not defined.';
    $res['time_response'] = time();
    echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
}

try {
    $id = $data['id'];
    $new_name = $data['new_name'];

    // get all clients
    $file = fopen(__DIR__ . '/../_data/data.txt', 'r');
    $tmp = [];
    while(!feof($file)){
        $tmp[] = trim(fgets($file));
    }
    fclose($file);

    // store clients again in the file
    $file = fopen(__DIR__ . '/../_data/data.txt', 'w');
    $index = 1;
    foreach($tmp as $client){
        if($index == $id){
            fputs($file, $new_name . PHP_EOL);
        } else {
            fputs($file, $client . PHP_EOL);
        }
        $index++;
    }
    fclose($file);

    $res['status'] = 'success';
    $res['message'] = 'Client updated with success.';
    $res['time_response'] = time();
    echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

} catch (\Throwable $th) {
    $res['status'] = 'error';
    $res['message'] = 'Unexpected error.';
    $res['time_response'] = time();
    echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

}
