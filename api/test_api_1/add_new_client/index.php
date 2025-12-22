<?php
header("Content-Type: application/json; charset=UTF-8");    

// check if request method is POST
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    $res['status'] = 'error';
    $res['message'] = 'Invalid HTTP request method.';
    $res['time_response'] = time();
    echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
}

// check if POST[new_client] is defined
if (!isset($_POST['new_client'])) {
    $res['status'] = 'error';
    $res['message'] = 'New client is not defined.';
    $res['time_response'] = time();
    echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
}

try {
    $new_client = $_POST['new_client'];

    // add new client to the list of clients
    $file = fopen(__DIR__ . '/../_data/data.txt', 'a');
    fputs($file, PHP_EOL . $new_client);
    fclose($file);

    $res['status'] = 'success';
    $res['message'] = 'New client added with success.';
    $res['time_response'] = time();
    echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

} catch (\Throwable $th) {
    $res['status'] = 'error';
    $res['message'] = 'Unexpected error.';
    $res['time_response'] = time();
    echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

}
