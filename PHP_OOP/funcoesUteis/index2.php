<?php

// FUNÇÕES ÚTEIS PARA VERIFICAÇÃO DE CLASSES

/*
Há no entanto um pequeno detalhe.
Se as nossas classes são carregadas com spl_autoload_register()
as nossas classes não existem a não ser quando são instanciadas.

Para isso resolvemos da seguinte forma:
*/

 function carregar_classes($nome_da_classe)
 {
     $path = 'classes/'.$nome_da_classe.'.php';
     if(file_exists($path)){
         require_once $path;
     }
 }

 spl_autoload_register('carregar_classes');

// verificar se uma classe existe
echo class_exists('Humano', true) ? 'Sim' : 'Nao';
echo '<br>';

// verifica se um método existe numa classe
echo method_exists('Humano', 'falar') ? 'Sim' : 'Não';
echo '<br>';

// verifica se uma propriedade existe numa classe
echo property_exists('Humano', 'apelido') ? 'Sim' : 'Não';
echo '<br>';