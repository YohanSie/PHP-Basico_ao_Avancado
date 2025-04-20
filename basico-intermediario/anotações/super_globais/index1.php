<?php

$nome = "joao";

apresentar();

echo $nome . '<br>';
echo $apelido;

function apresentar() {
    global $nome;
    echo $nome . '<br>';

    //ou

    echo $GLOBALS['nome'] . '<br>';

    // podemos alterar o valor da váriavel global
    $GLOBALS['nome'] = "carlos";
    $GLOBALS['apelido'] = 'ribeiro';
}