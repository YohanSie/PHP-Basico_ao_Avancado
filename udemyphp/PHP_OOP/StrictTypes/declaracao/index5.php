<?php

declare (strict_types = 1);

class Pessoa
{
    public String $nome;
    public String $apelido;
    public int $altura;

    public function falar(String $mensagem):String
    {
        return "O meu nome é $this->nome e a mensagem é: $mensagem<br>";
    }

    protected function Intimo()
    {
        return "O meu apelido é $this->apelido e minha altura é $this->altura cm.";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Yohan Siedschlag";
echo $pessoa->falar('Bom dia!');

class Amigo extends Pessoa
{
    public function revelarIntimo(): string
    {
        return $this->Intimo();
    }
}

$amigo = new Amigo();
$amigo->nome = "Yohan";
$amigo->apelido = "Alemão";
$amigo->altura = 184;

echo $amigo->revelarIntimo();