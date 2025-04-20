<?php

// function nome_da_funcao(parâmetros) {
//     codigo
// }

//function apresentar(){
//    echo 'Estou dentro de uma função PHP';
//}
//
//echo "Estou for ada função";
//echo "<br>";
//apresentar();

function apresentar(){
    return "Função apresentar<br>";
}
function executar(){
    echo "Função executar<br>";
}

$texto = apresentar();
echo $texto;

executar();

function construct_result(){
    $valor1 = 100;
    $valor2 = 2;
    return $valor1 * $valor2;
}

$resultado = construct_result();
echo $resultado;