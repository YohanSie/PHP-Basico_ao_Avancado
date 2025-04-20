<?php

class Fruto
{
    // propriedades
    public $name;
    public $cor;
    public $peso;

    // metodos
    public function apresentar_fruto()
    {
        return "O meu nome é {$this->name}, a minha cor é {$this->cor} e tenho {$this->peso} gramas";
    }
}

$laranja = new Fruto();
$laranja->name = 'Laranja';
$laranja->cor = 'laranja';
$laranja->peso = '125';

$banana = new Fruto();
$banana->name = 'Banana';
$banana->cor = 'amarela';
$banana->peso = '178';

echo $laranja->apresentar_fruto();
echo '<br>';
echo $banana->apresentar_fruto();