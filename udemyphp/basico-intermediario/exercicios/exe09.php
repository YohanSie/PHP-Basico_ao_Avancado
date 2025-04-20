<?php
    $frase = "Esta frase vai aárecer com diferentes opacidades.";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 09</title>
</head>
<body>
    <?php for($i = 10; $i >= 0; $i--): ?>
        <h3 style="opacity: <?= $i / 10 ?>"><?= $frase ?></h3>
    <?php endfor; ?>
</body>
</html>
