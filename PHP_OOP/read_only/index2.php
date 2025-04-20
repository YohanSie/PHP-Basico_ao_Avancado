<?php

// Propriedades ReadOnly

class Usuario
{
    public readonly string $usuario;
    public function __construct($u)
    {
        $this->usuario = $u;
    }
    public function alterar()
    {
        $this->usuario = "joaquim";
    }
}

$usuario = new Usuario('Joao');
echo $usuario->usuario;

// Vamos agora tentar alterar o valor depois da variável iniciada
// no construtor.

// Vamos primeiro chamar o método alterar()
// Fatal error: Uncaught Error: Cannot modify readonly property
$usuario->alterar();

// diretamente também não dá certo
$usuario->usuario = "joaquim";

// IMPORTANTE: as propriedades readonly podem ser public, private e protected
// mas tem sempre que ter um data type referenciado

// Ex: private readonly bool $avancar