<?php

header("Content-Type: application/json; charset=UTF-8");    

// access to an endpoint without any kind of authentication
$res['status'] = 'success';
$res['message'] = 'Acesso a um endpoint sem qualquer requisito de autenticação.';
$res['time_response'] = time();
echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);