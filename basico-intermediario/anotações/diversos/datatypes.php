<?php 

// Tipo de Dados Escalares

// bool / booleano
$apresentar_dados = true;

// int
$valor = 0;

// float
$float = 1.5;

//string
$nome = "João";

// DATA TYPES - tipos de dados

/*
Existem outros tipos de dados mais avançados.
Iremos falar sobre eles mais à frente.

Tipos compostos
-----------------------------------
> arrays
> objects
> callable
> iterate

Tipos especiais
-----------------------------------
> resource
> null
*/

// TRANFORMAR STRING EM INT

$valor_str = "145";
$valor_int = (int) $valor_str;

var_dump($valor_str);
var_dump($valor_int);

$valor_int = "145";
$valor_float = floatval($valor_int);

var_dump($valor_int);
var_dump($valor_float);

// NULL

$valor2 = 100;
echo $valor2;
unset ($valor2);
var_dump($valor2);