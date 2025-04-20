<?php

// MÉTODOS ESTÁTICOS

/*
Podemos também chamar métodos estáticos de uma classe
a partir de outra classe. Vejamos o exemplo.
*/
class Matematica
{
    public static function adicionar($a,$b)
    {
        return $a + $b;
    }
}

class Operacoes
{
    public function executar()
    {
        return Matematica::adicionar(10, 20);
    }
}

$operacoes = new Operacoes();
echo $operacoes->executar();