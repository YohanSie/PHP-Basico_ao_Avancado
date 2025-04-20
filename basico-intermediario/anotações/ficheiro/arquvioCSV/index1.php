<?php


// CSV -> Comma Separated Values (valores separados por vírgulas)

$file = fopen("dados.csv", 'w');

$header = ['Coluna A', 'Coluna B', 'Coluna C'];
fputcsv($file, $header);

for ($i = 1; $i <= 100; $i++) {
    $linha = [rand(100, 999), rand(100, 999), rand(100, 999)];
    fputcsv($file, $linha);
}

fclose($file);