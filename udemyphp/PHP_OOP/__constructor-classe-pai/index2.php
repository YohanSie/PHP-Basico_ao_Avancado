<?php

// COMO CHAMAR O CONSTRUTOR DE UMA CLASSE PAI

// Vejamos agora como fazer para chamar o método __construct do pai

class Humano
{
    public $nome;
    public $perfil;
    public function __construct($nome)
    {
        $this->nome = $nome;
    }
}

class Funcionario extends Humano
{
    public function __construct($n)
    {
        parent::__construct($n);
        $this->perfil = "administrador";
    }
}

$funcionario = new Funcionario('Joao');
echo $funcionario->nome;
echo "<br>";
echo $funcionario->perfil;