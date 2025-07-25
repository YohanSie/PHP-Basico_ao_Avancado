<?php

// MÉTODOS ESTÁTICOS

/*
Podemos ainda ter uma classe mãe, com um método estático,
e numa classe filha chamar esse método usando a expressão PARENT.
Vejamos.
*/

class Operacoes
{
    protected static function operacao1()
    {
        return 'Operação 1';
    }
}

class Matematica extends Operacoes
{
    public function executar()
    {
        return parent::operacao1();
    }
}

$matematica = new Matematica();
echo $matematica->executar();