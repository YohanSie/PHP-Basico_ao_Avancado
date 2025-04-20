<?php

// PROPRIEDADES ESTÁTICAS

/*
À semelhança dos métodos, as classes também podem
ter propriedades estáticas. Essas propriedades podem
ser chamadas diretamente sem que seja necessário criar
uma instância da classe.
*/

class Matematica
{
    public static $pi = 3.14;
}

echo "Resultado = " . Matematica::$pi * 10;