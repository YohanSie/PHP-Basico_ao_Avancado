<?php

// ACCESS MODIFIERS

/*
Já vimos que as classes podem ter PROPRIEDADES (variáveis da classe)
e MÉTODOS (funções da classe).

As PROPRIEDADES e os MÉTODOS podem ter níveis de acesso distintos
que permitem controlar a que nível podemos ter acesso a eles ou não.

PUBLIC - a propriedade ou método pode ser acedida a partir de qualquer lado.
É o access modifier padrão.

PROTECTED - a propriedade ou método pode ser acedida dentro da classe
e dentro de classes derivadas dela (veremos mais à frente o que são classes derivadas).

PRIVATE - a propriedade ou método só pode ser acedido DENTRO da classe.

Vejamos um exemplo muito simples.
*/

class Homem
{
    public $nome;
    protected $apelido;
    private $cor_do_cabelo;
}

// objeto
$man = new Homem();

$man -> nome = "Joao"; // - OK
//$man -> apelido = "Ribeiro"; // - ERRO
//$man -> cor_do_cabelo = "castanho"; // - ERRO