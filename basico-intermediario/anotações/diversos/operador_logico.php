<?php

    // Operadores Lógicos

    // &&   ||   !   and    or

    $x = true;
    $y = true;
    var_dump($x && $y);

    $x = 20;
    $y = 10;
    var_dump($x > 10 && $y < 20);
    var_dump($x > 100 && $y < 20);

    $x = false;
    $y = true;
    var_dump($x || $y);

    var_dump(10 > 1 || 10 > 200);
    var_dump(2 < 1 || 3 < 2);

    $nome = "joao";
    var_dump(!is_string($nome));

    