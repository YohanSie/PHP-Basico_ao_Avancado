<?php

echo '<pre>';

$file = fopen(__DIR__ . "/dados.csv", 'r');
while (!feof($file)){
    $linha = fgetcsv($file, 0, ',', '"', "\\");
    print_r($linha);
}
fclose($file);