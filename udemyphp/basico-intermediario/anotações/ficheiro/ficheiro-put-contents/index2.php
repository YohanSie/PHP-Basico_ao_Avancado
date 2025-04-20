<?php
echo '<pre>';

file_put_contents(__DIR__ . '/file1.txt', 'texto do ficheiro_basico 2');


file_put_contents(__DIR__ . '/file2.txt', time() . PHP_EOL, FILE_APPEND);
echo 'terminado';