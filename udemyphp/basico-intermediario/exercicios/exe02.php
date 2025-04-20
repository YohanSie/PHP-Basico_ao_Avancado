<?php
    $produtos = ['arroz', 'batata', 'laranja'];
    $produtos_invertidos = array_reverse($produtos);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 02</title>
</head>
<body>
    <h1>All products of the array '$produtos'</h1>
    <ul>
        <?php
            array_push($produtos_invertidos, 'maçã', 'pêra');

            foreach ($produtos_invertidos as $produto) {
                echo "<li>$produto</li>";
            }
        ?>
    </ul>

</body>
</html>