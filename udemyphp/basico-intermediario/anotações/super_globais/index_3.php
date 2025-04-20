<?php

// $_SESSION
// Acesso para leitura e manipulação das variáveis da sessão

session_start();

$_SESSION['usuario'] = 'joao';
$_SESSION['perfil'] = 'admin';
$_SESSION['autorizado'] = true;

echo '<pre>';
print_r($_SESSION);