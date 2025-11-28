<?php

/* 
Vamos criar uma função para ler os dados do CSV.

Os dados também serão devolvidos em forma de array.
*/

require '../../../../BNG/vendor/autoload.php';

$data = [
    ['nome', 'email', 'telefone'],
    ['cliente1', 'c1@gmail.com', '111111111'],
    ['cliente2', 'c2@gmail.com', '222222222'],
    ['cliente3', 'c3@gmail.com', '333333333'],
];

write_csv('ficheiros_de_dados/output.csv', $data);

function write_csv($csv_file, $data): void
{
    // cria uma spreadsheet (como se fosse um doc Excel)
    $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

    $active_sheet = $spreadsheet->getActiveSheet();

    $active_sheet->fromArray($data);

    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Csv($spreadsheet);
    $writer->setDelimiter(';');
    $writer->setEnclosure('');
    $writer->setLineEnding("\r\n");

    $writer->save($csv_file);
}