<?php

$file = fopen(__DIR__ . "/dados.txt", 'r');
while(!feof($file)){
    echo fgets($file) . '<br>';
}
fclose($file);

// ou
echo '<hr>';

$file = fopen(__DIR__ . "/dados.txt", 'r');
while(($linha = fgets($file)) !== false){
    echo $linha . '<br>';
}
fclose($file);
