<?php

// IMPEDIR HERANÇA DE CLASSE OU MÉTODO

/* 
Podemos usar a mesma metodologia para os métodos.
*/

class Pessoa
{
    public function identificar()
    {
        // ...
    }

    final public function falar()
    {
        // ...
    }
}

class Cliente extends Pessoa
{
    public function identificar()
    {
        // nova implementação é possível
    }

//    public function falar()
//    {
//        // Fatal error: Cannot override final method
//    }
}