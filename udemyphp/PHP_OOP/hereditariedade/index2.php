<?php

class Animal_de_estimacao
{
    protected $nome;
    protected $especie;
    protected $raca;

    function __construct($nome, $especie, $raca)
    {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->raca = $raca;
    }
}

class Cao extends Animal_de_estimacao
{
    function latir($vezes)
    {
        echo "O {$this->nome} latiu $vezes vezes! <br>";
    }
}

class Gato extends Animal_de_estimacao
{
    function miar($vezes)
    {
        echo "O {$this->nome} miou $vezes vezes! <br>";
    }
}

$cao = new Cao('Snoopy', 'Canis lupus', 'Beagle');
$gato = new Gato('Garfield', 'Felis catus','Persa');

echo $cao->latir(10);
echo '<br>';
echo $gato->miar(10);