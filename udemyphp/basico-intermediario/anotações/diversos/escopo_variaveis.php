<?php

$nome = "Joao";

function dados(){
    global $nome;
    $nome = 'joaquim';
}

dados();

echo $nome;