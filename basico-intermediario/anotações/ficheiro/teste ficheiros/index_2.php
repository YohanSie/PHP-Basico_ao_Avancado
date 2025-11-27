<?php

/* 
Vamos criar uma função para ler os dados do CSV.

Os dados também serão devolvidos em forma de array.
*/

// carregar o autoload do composer para podermos usar o PhpSpreadsheet
require '../vendor/autoload.php';

// $dados vai ser preenchido com o conteúdo do ficheiro CSV
$dados = reader_csv('ficheiros_de_dados/ficheiro.csv');

// vamos apresentar os dados
echo '<pre>';
print_r($dados);


function reader_csv($csv_file): array
{

    // cria o objeto reader de CSV
    $reader = new PhpOffice\PhpSpreadsheet\Reader\Csv();

    // define o encoding do ficheiro de origem
    $reader->setInputEncoding('UTF-8');

    // vamos definir opções do ficheiro:
    $reader->setDelimiter(';');     // dados separados por ;
    $reader->setEnclosure('');      // dados limpos, sem aspas
    
    // carrega o ficheiro
    $sheet = $reader->load($csv_file);
    
    // devolve o array
    return $sheet->getActiveSheet()->toArray();
}