<?php

require_once('index3.php');
require_once('index4.php');

$operacoes_loja = new Loja\Operacoes();
$operacoes_armazem = new Armazem\Operacoes();

$operacoes_loja->operacao_1();
$operacoes_loja->operacao_2();

$operacoes_armazem->operacao_1();
$operacoes_armazem->operacao_2();