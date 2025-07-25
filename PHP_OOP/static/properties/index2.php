<?php

// PROPRIEDADES ESTÁTICAS

// As classes podem ter propriedades estáticas e não estáticas
// tal como acontece com os métodos.
// As propriedades estáticas podem ser acedidas a partir de qualquer
// método da classe usando a expressão SELF

class Humano
{
    public static $nome;

    public function definir_nome($n)
    {
        self::$nome = $n;
    }
    public function apresentar()
    {
        return "O meu nome é " . self::$nome;
    }
}

$humano = new Humano();
$humano->definir_nome("João Ribeiro");
echo $humano->apresentar();