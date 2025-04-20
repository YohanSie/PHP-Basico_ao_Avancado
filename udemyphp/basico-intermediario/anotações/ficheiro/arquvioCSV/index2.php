<?php

/*
Os ficheiros CSV podem conter diferentes opções de formatação.
É muito simples definir essas opções. Todas as configurações estão
nos argumentos que podemos passar para a função fputcsv
*/

// fputcsv(
//     'resource/-ficheiro',
//     'array com os dados',
//     'caracter de separação entre os dados',
//     'caracter de delimitação no caso de valores do tipo string',
//     'caracter de escape em strings',
//     'string de marcação do final de linha'
// )

// exemplo
//fputcsv(
//    $stream,
//    array $fields,
//    string $separator = ",",
//    string $enclosure = '"',
//    string $escape = "\\",
//    string $eol = PHP_EOL
//);