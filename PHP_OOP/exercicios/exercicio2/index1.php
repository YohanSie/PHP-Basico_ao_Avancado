<?php

namespace Humanos;

class Humanos
{
    private $masc = [];
    private $femi = [];
    private $desc = [];

    public function definir($sexo, $nome)
    {
        if (strtoupper($sexo) == "M"){
            $this->masc[] = $nome;
        } elseif (strtoupper($sexo) == "F"){
            $this->femi[] = $nome;
        } else {
            $this->desc[] = $nome;
        }
    }
    public function viewMasc()
    {
        return $this->masc;
    }
    public function viewFemi()
    {
        return $this->femi;
    }
    public function viewDesc()
    {
        return $this -> desc;
    }
}