<?php

$clients = [];
$file = fopen(__DIR__ . '/data.txt', 'r');
while(!feof($file)){
    $clients[] = trim(fgets($file));
}
fclose($file);

return $clients;