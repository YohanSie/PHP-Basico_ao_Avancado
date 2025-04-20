<?php

$dados = file_get_contents(__DIR__ . '/dados.txt');
echo nl2br($dados);

echo "<hr>";

$dados = file_get_contents(__DIR__ . '/dados.txt', offset: 6, length: 40);
echo nl2br($dados);