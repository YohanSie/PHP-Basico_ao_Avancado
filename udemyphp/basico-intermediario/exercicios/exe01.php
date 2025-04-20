<?php
    $produtos = ['arroz', 'batata', 'laranja'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 01</title>
</head>
<body>
    <h1>All products of the array '$produtos'</h1>
    <ul>
        <?php
            foreach ($produtos as $produto) {
                echo "<li>$produto</li>";
            }
        ?>
    </ul>

</body>
</html>