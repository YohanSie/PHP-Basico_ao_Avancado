<?php

// DECLARAÇÃO STRICT TYPES

/*
Para que o PHP obrigue a passar argumentos que correspondem
ao tipo de dado esperado, temos que ativar o strict_types = 1
*/

declare (strict_types = 1);

function apresentar1($mensagem)
{
    echo "Mensagem: $mensagem<br>";
}
function apresentar2(String $mensagem)
{
    echo "Mensagem: $mensagem<br>";
}

apresentar1("Estou apresentando");
apresentar2(100);