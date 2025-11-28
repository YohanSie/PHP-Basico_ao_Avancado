<?php

/* 
Vamos criar uma função para ler os dados do XLSX.

A ideia é trazer para o interior da nossa aplicação o conteúdo
em formato de array, para que possamos tratar a informação da 
forma que nos interessar melhor.
*/

// carregar o autoload do composer para podermos usar o PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

require '../../../../BNG/vendor/autoload.php';

$data = [
    ['nome', 'email', 'telefone'],
    ['cliente1', 'c1@gmail.com', '111111111'],
    ['cliente2', 'c2@gmail.com', '222222222'],
    ['cliente3', 'c3@gmail.com', '333333333'],
];

write_xlsx('ficheiros_de_dados/output.xlsx', $data);

function write_xlsx($xlsx_file, $data): void
{
    // cria uma spreadsheet (como se fosse um doc Excel)
    $spreadsheet = new Spreadsheet();

    // remove a sheet criada automaticamente
    $spreadsheet->removeSheetByIndex(0);

    // cria um worksheet (uma spreadsheet pode conter várias
    $worksheet = new Worksheet($spreadsheet, 'a');

    // add a worksheet à spreadsheet
    $spreadsheet->addSheet($worksheet);

    $worksheet->fromArray($data);

    $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

    $writer->save($xlsx_file);
}