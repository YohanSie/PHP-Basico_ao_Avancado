<?php

// -----------------------------------------
// podemos criar e remover pastas
// mkdir(__DIR__ . '/pasta_teste');

// Se a pasta existir, vai aparecer um aviso.
// Devemos sempre assegurar se a pasta ou ficheiro_basico existe.
// Para isso podemos usar a função file_exists().
// Funciona para ficheiros e pastas.

if(!file_exists(__DIR__ . '/pasta_testes')){
    mkdir(__DIR__ . '/pasta_teste');
}