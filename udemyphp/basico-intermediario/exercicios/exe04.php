<?php
    $nome = '';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 04</title>
</head>
<body>
    <h1>Verification of Paragraph</h1>
    <?php if($nome == "João"): ?>
        <p>O nome é João</p>
    <?php elseif($nome == "Ana"): ?>
        <p>O nome é Ana</p>
    <?php elseif($nome == "Carlos"): ?>
        <p>O nome é Carlos</p>
    <?php else: ?>
        <p>Não tem nome</p>
    <?php endif; ?>

</body>
</html>