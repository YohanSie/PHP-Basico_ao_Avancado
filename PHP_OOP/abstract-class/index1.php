<?php

// CLASSES ABSTRATAS

/*
Outro conceito muito importante na Programação Orientada a Objetos
é o conceito de classes abstratas.

Uma classe abstrata, com métodos abstratos, implica que a classe
tenha métodos que estão declarados, mas cuja funcionalidade vai ter que ser
implementada nas classes derivadas.

Vejamos um exemplo:
*/

abstract class Pessoa
{
    abstract public function identificar();
    abstract public function falar();
    abstract public function saltar();
}

// Como podes ver, os métodos estão declarados, mas não têm implementação.
// As classes derivadas vão ter que definir essa implementação.

class Clientes1 extends Pessoa
{
    // Fatal error: Class Clientes1 contains 3 abstract methods
    // and must therefore be declared abstract or implement the remaining methods
    public function identificar()
    {

    }
    public function falar()
    {

    }
    public function saltar()
    {

    }
}

class Clientes2 extends Pessoa
{
    public function identificar()
    {

    }
    public function falar()
    {

    }
    public function saltar()
    {

    }
}

// A classe Clientes2 contém todas as implementações
// que a classe Pessoa 'obriga' a implementar devido ao uso
// da expressão 'ABSTRACT'