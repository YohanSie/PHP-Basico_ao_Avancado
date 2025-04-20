<?php

// SOBREPOSIÇÃO DE MÉTODOS HERDADOS

/*
O conceito de 'sobreposição' é uma tradução simples de um outro
conceito mais conhecido como 'override'.
Na prática significa que podemos ter uma classe 'mãe' onde um
determinado método é definido e podemos alterar o seu código
dentro de uma classe 'filha'.

Vejamos o exemplo:
*/

class Pessoa
{
    public $nome;

    public function identificacao()
    {
        echo "O nome é {$this->nome} e este método é da classe mãe";
    }
}

class Cliente1 extends Pessoa
{
    public function identificacao()
    {
        echo "O nome é {$this->nome} e este método tem uma nova implementação na classe filha.";
    }
}

// instanciar um objeto de cada classe:

$pessoa = new Pessoa();
$pessoa->nome = "Joao";

$cliente = new Cliente1();
$cliente->nome = "Carlos";

$pessoa->identificacao();
echo '<br>';
$cliente->identificacao();