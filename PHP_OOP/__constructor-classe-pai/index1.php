<?php

class Humano
{
    public $nome;
    public $perfil;
    public function __construct($nome)
    {
        $this->nome = $nome;
    }
}

class Funcionario extends Humano
{
    public function __construct()
    {
        $this->perfil = "administrador";
    }
}

$funcionario = new Funcionario();

/*
O que está a acontecer aqui?
Funcionario é uma classe que tem herança de Humano.
Mas como foi implementado um __construct na classe Funcionario,
a herança "esquece" a assinatura da classe pai, e assume a implementação
da classe filho.

O código é executado sem qualquer problema.
*/
