<?php
// O QUE SÃO TRAITS E COMO UTILIZAR

/*
O PHP apenas suporta heranças únicas: uma classe só pode herdar
de uma outra classe.

Imagina que queres que a classe seja derivada de outra e, ao mesmo
tempo, possa "herdar" outras funcionalidades a partir de outras estruturas.

É neste contexto que os traits surgem.

Basicamente, traits permitem declarar métodos que podem ser usados
em múltiplas classes.
Na sua vertente mais avançada, os traits podem conter métodos abstratos
que podem ser usados em múltiplas classes, e esses métodos podem
ter qualquer tipo de access modifier.

Vamos perceber o conceito através de exemplos simples.
*/

trait funcoes_matematicas
{
    public function adicionar($a, $b)
    {
        return $a + $b;
    }
    public function subtrair($a, $b)
    {
        return $a - $b;
    }
    public function multiplicar($a, $b)
    {
        return $a * $b;
    }
    public function dividir($a, $b)
    {
        return $a / $b;
    }
}

class Matematica
{
    use funcoes_matematicas;
}

$math = new Matematica();
echo $math->adicionar(20, 2);
echo '<br>';
echo $math->subtrair(20, 2);
echo '<br>';
echo $math->multiplicar(20, 2);
echo '<br>';
echo $math->dividir(20, 2);

/*
O que aconteceu aqui?
Como podes facilmente concluir pelo exemplo,
foi possível incorporar dentro da classe Matematica,
um conjunto de funções pertencente um trait.
*/