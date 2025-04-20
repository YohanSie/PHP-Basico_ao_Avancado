<?php

// Hereditariedade

/*
Um dos aspectos mais importantes da POO é a possibilidade
de estruturarmos o nosso código no sentido de permitir que classes
possam herdar propriedades e métodos de outras classes

Desta forma, podemos ter código mais limpo e bem estruturado,
sem repetições de código.
*/

class Veiculo
{
    public $tipo;

    public function  ligar()
    {
        // ...
    }

    public function desligar()
    {
        // ...
    }
}

class Automovel extends Veiculo
{
    public $portas;
    public $marca;
    public $ano;
}

class Aviao extends Veiculo
{
    public $altitude_maxima;
    public $autonomia;
    public $construtora;
    public $ano_de_fabrica;
}

// Então...

$automovel = new Automovel();
$automovel->tipo = "Veiculo Terrestre";
$automovel->marca = "Ferrari";
$automovel->portas = "2";
$automovel->ano = 2020;

$aviao = new Aviao();
$aviao->tipo = "Veiculo Aéreo";
$aviao->construtora = "Boing";
$aviao->autonomia = 6000;
$aviao->ano_de_fabrica = 2022;
$aviao->altitude_maxima = 33000;

$automovel->ligar();
$aviao->ligar();