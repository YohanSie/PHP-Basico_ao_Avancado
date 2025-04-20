<?php

// HEREDITARIEDADE

/*
O access modifier PROTECTED pode ser usado em propriedades e métodos.
Portanto:
*/


class Client {

    protected $nome;
    protected $email;

    function __construct($n, $e)
    {
        $this->nome = $n;
        $this->email = $e;
    }

    protected function apresentar()
    {
        return "O nome do cliente é {$this->nome} e o email é {$this->email}.";
    }
}

$clientes = [
    new Client('joao', 'joao@gmail.com'),
    new Client('ana', 'ana@gmail.com'),
    new Client('carlos', 'carlos@gmail.com')
];

echo '<pre>';
print_r($clientes);

// daria erro:
// echo $clientes[0]->apresentar();