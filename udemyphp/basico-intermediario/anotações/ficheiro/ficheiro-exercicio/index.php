<?php
file_put_contents(__DIR__ . '/tabuada.txt', '');

for($i = 1; $i <= 1000; $i++){
    $resultado = "3 x $i = " . (3 * $i) . PHP_EOL;
    file_put_contents(__DIR__ . '/tabuada.txt', $resultado, FILE_APPEND);
}

echo "terminado";