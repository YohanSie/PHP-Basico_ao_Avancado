<?php

//$nomes = ["joao", "ana", "carlos", "joaquim"];
//
//$resultado = is_array($nomes);
//
//$resultado = count($nomes);
//
//// adiciona valor no final
//array_push($nomes, "fernando", "manuela");
//// adiciona valor no inicio
//array_unshift($nomes, "marcos");
//
//echo "<pre>";
//print_r($nomes);
//echo "</pre>";
//
//// retira valor do final
//$resultado = array_pop($nomes);
//
//// retira valor do inicio
//$resultado = array_shift($nomes);
//
//// retira pelo indice
//unset($nomes[0]);
//
//echo "<pre>";
//print_r($nomes);
//echo "</pre>";
//
//$nomes = array_values($nomes);
//
//echo "<pre>";
//print_r($nomes);
//echo "</pre>";

// arays associativos

$cliente = [
    'nome' => "joao",
    'apelido' => "ribeiro",
    'idade' => 48,
    'email' => "joao@gmail.com"
];

echo $cliente['email'] . "\n";

var_dump(key_exists('telefone', $cliente));

$resultado = implode(", ", $cliente);
var_dump( "\n>".$resultado);

$nomes = ["joao", "ribeiro", "carlos", "francisco", "cristina"];
$nomes_parte = array_slice($nomes, 3);
print_r( $nomes_parte);