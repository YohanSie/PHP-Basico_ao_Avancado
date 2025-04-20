<?php

// MÉTODOS ESTÁTICOS

/*
Métodos estáticos são métodos de uma classe que podem ser
evocados diretamente sem que seja necessário criar um
objeto a partir dessa classe.

Vejamos com um exemplo.
*/

class Matematica1
{
    public static function adicionar($a, $b)
    {
        return $a + $b;
    }
}

// Podemos chamar o método escrevendo o nome da classe
// logo depois '::' e o nome do método com os respetivos
// parâmetros.
echo Matematica1::adicionar(20,30);