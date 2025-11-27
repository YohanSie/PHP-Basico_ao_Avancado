<?php

/* 
Vamos criar uma função para ler os dados do XLSX.

A ideia é trazer para o interior da nossa aplicação o conteúdo
em formato de array, para que possamos tratar a informação da 
forma que nos interessar melhor.
*/

// carregar o autoload do composer para podermos usar o PhpSpreadsheet
require '../vendor/autoload.php';

// $dados vai ser preenchido com o conteúdo do ficheiro XLSX
$dados = reader_xlsx('ficheiros_de_dados/ficheiro.xlsx');

// vamos apresentar os dados
echo '<pre>';
print_r($dados);

function reader_xlsx($xlsx_file): array
{
    
    // cria um objeto de leitura
    $reader = new PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    
    // indica que pretende apenas a informação das células e não a formatação
    $reader->setReadDataOnly(true);
    
    // carrega o conteúdo do ficheiro
    $spreadsheet = $reader->load($xlsx_file);

    // devolve a informação em formato de array
    return $spreadsheet->getActiveSheet()->toArray();
}

