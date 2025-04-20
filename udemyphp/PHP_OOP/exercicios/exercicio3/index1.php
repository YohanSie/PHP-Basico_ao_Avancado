<?php

namespace classes_abstract;

abstract class Veiculos
{
    protected $tipo;
    protected $marca;
    protected $ano;

    function __construct($dados)
    {
        $this->tipo = $dados[0];
        $this->marca = $dados[1];
        $this->ano = $dados[2];
    }

    public function getTipo()
    {
        return $this->tipo;
    }
}

class Automovel extends Veiculos
{
    public function apresentar()
    {
    return "Automovel da marca $this->marca do ano $this->ano";
    }
}

class Aviao extends Veiculos
{
    public function apresentar()
    {
        return "Avião da marca $this->marca do ano $this->ano";
    }
}

class Barco extends Veiculos
{
    public function apresentar()
    {
        return "Barco da marca $this->marca do ano $this->ano";
    }
}