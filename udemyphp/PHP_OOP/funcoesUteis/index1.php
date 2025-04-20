<?php

class Humano
{
    public $nome;

    public function falar($mensagem)
    {
        // ...
    }
}

class Pessoa
{
    // ...
}

// verifica se uma class existe
echo class_exists('Pessoa') ? 'Sim' : 'Não';
echo '<br>';

// verifica se um método existe numa classe
echo method_exists('Humano', 'falar') ? 'Sim' : 'Não';
echo '<br>';

// verifica se uma propriedade existe numa classe
echo property_exists('Humano', 'apelido') ? 'Sim' : 'Não';
echo '<br>';