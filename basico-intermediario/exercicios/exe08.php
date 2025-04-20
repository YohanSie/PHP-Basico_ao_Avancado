<?php
/*
Dada a coleção de nomes, apresenta toda a coleção exceto o nome cujo índice é 4 (maria)
*/

$nomes = ['joao', 'ana', 'carlos', 'marco', 'maria', 'silvia', 'helena', 'ricardo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach ($nomes as $key) : ?>
    <?php if ($key == 4) continue; ?>
    <p><?= $key ?></p>
<?php endforeach; ?>
</body>
</html>
