<?php
// Arrays
//$nomes = ["joao", "ana", "carlos"];
//
//// Acessar valores
//echo $nomes[0];
//echo "\n".$nomes[2];
//
//$nomes = [
//    10 => "joao",
//    20 => "ana",
//    30 => "carlos"
//];
//
//echo "\n".$nomes[10];
//echo "\n".$nomes[20];
//echo "\n".$nomes[30];
//echo "\n";
//
//var_dump(isset($nomes[10]));
//
//$nomes[40] = "pedro";
//echo"\n".$nomes[40];
//
//// adicionar elementos = push
//$nomes = ["joao", "ana", "carlos"];
//array_push($nomes, "pedro");
//
//echo "<pre>";
//print_r($nomes);
//echo "</pre>";
//
//// remover elementos
//unset($nomes[1]);
//echo "<pre>";
//print_r($nomes);
//echo "</pre>";

// indices associativos - alfanúmericos

$empresa = [
    'ceo' => "joao",
    'admin' => "ana",
    'executivo' => "carlos",
    'contabilista' => "cristina"
];

$empresa['operario'] = "antonio";
echo "<pre>";
print_r($empresa);
echo "</pre>";
