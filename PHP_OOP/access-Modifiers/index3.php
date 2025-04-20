<?php

// ACCESS MODIFIERS

/*
Então qual é a importância dos Access Modifiers numa classe?

Cenário um:
Imagina que queres que a definição do $nome não possa ser direta.
Queres que exista uma espécie de validação antes que os objetos criados
a partir da classe possam aceitar o nome que queres definir.
*/

class Homem
{
    // propriedade privada. O seu acesso não é possivel fora da classe
    private $nome;

    function set_nome($n)
    {
        $nomes_proibidos = [
            'joao', 'carlos'
        ];

        // verifica se o $n pertence aos nomes proibidos
        if (in_array($n, $nomes_proibidos)) {
            return;
        }
        $this->nome = $n;
    }

    function get_nome()
    {
        return $this->nome;
    }
}

$h = new Homem();

$h -> set_nome('joao');
echo 'O nome é: ' . $h -> get_nome(); // vazio
echo '<br>';

$h -> set_nome('antônio');
echo "O nome é " . $h -> get_nome(); // antônio
echo '<br>';

// Os access modifiers permitem-nos controlar de forma muito clara
// que informação e métodos estão disponíveis fora da classe.
// Esta filosofia é de extrema importância: uma classe só deve ter
// público aquilo que é absolutamente necessário.

// Veremos mais sobre os access modifiers quando falármos de hereditariedade.
