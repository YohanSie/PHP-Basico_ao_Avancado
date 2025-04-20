<?php

echo '(index2): ' . __DIR__ . '<br>';

include 'outros/script.php';

adicionar(10, 20);

function adicionar($n1, $n2){
    echo $n1 + $n2 . '<br>';
    echo __FUNCTION__ . '<br>';
    return $n1 + $n2;
}