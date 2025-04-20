<?php

// verifica se houve um request do tipo POST
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die('Acesso inválido.');
}

echo '<pre>';
print_r($_POST);