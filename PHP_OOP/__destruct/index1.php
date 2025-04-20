<?php

class Cliente
{

    private $nome;

    function __construct($n)
    {
        $this->nome = $n;
        echo 'Foi criado um novo objeto com o nome: ' . $this->nome . '<br>';
    }

    function __destruct()
    {
        echo 'O objeto foi destruido. Tinha o seguinte nome: ' . $this->nome . '<br>';
    }

}

$client = new Cliente('John Doe');

for ($i = 1; $i <= 10; $i++)
{
    echo "Valor do i: $i<br>";
}

// agora vamos destruir deliberadamente o objeto
unset($client);

echo "Fim do script";