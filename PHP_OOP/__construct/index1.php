<?php

class Mulher
{

    private $nome;
    private $apelido;

    function __construct($n, $a)
    {
        $this->nome = $n;
        $this->apelido = $a;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getApelido()
    {
        return $this->apelido;
    }

    function getNomeCompleto()
    {
        return $this->nome . ' ' . $this->apelido;
    }

}

$m = new Mulher('Ana', 'Silva');

echo 'O nome completo é: ' . $m->getNomeCompleto();