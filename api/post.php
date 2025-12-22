<?php

/*
Vamos usar o método POST para adicionar um novo cliente à nossa lista.
Podemos fazê-lo de duas formas: em POSTFIELDS em formato de array ou com JSON
*/

// em formato de POST normal
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/PHP-Basico_ao_Avancado/api/test_api_1/add_client/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('new_client' => 'Joao'),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

/* 
CURLOPT_POSTFIELDS
----------------------------------
A coleção (array) de campos a submeter no post.
O equivalente aos inputs, por exemplo, no caso da submissão de um formulário.
*/