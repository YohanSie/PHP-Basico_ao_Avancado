<?php
declare (strict_types = 1);

function adicionar($a, $b){
    return $a + $b;
}

echo adicionar(2, 3);

function apresentar($a, $b, $c = 100){
    return "$a | $b | $c";
}

echo apresentar(10,20);
echo "<br>";
echo apresentar(c:12, b: 213, a: 290);
echo "<br>";

function adictionar($a, $b):int {
    return $a + $b;
}

echo adictionar(10,20) . "<br>";

function add($a, $b):string {
    return $a * $b;
}

echo add(10, 2) . "<br>";

// existe os strict_types em PHP...

function multiplicar($a, $b):int|float {
    return $a * $b;
}

echo multiplicar(10, 2.5) . "<br>";