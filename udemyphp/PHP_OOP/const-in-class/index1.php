<?php

// CONSTANTES DENTRO DE UMA CLASSE

/*
Por vezes podes ter necessidade de definir uma constante
que é para ser usada apenas dentro da classe.
Bom, na realidade, isto é possível, mas as constantes são,
por natureza, públicas.

Vejamos como funcionam.
*/
namespace consts_class;
class Matematica
{
    const VALOR_FIXO = 10;

    public function calcular($numero)
    {
        return $numero * self::VALOR_FIXO;
    }
}

$m = new Matematica();
echo $m->calcular(100);
echo '<br>';
echo $m::VALOR_FIXO; // apresentar o const assim