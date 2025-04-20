<?php

// CONSTANTES DE UMA CLASSE

/*
A partir do PHP 7.1 passou a ser possivel usar publi, private
e protected como acess modifier das constantes.
*/

namespace consts_class1;
class Matematica
{
    private const VALOR_FIXO = 10;

    public function executar($n)
    {
        return self::VALOR_FIXO * $n;
    }
}

$m = new Matematica();
echo $m->executar(200);
echo '<br>';
// echo $m::VALOR_FIXO; // vamos ter um erro