<?php
echo "<pre>";

// obter tamanho em bytes
$dados = filesize('registros.txt');
echo $dados . ' bytes';

echo '<hr>';

// obter informações
$info = pathinfo('registros.txt');
print_r($info);