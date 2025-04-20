<?php 
    $res = 5 + 2 / 2;
    echo "O resultado é $res";

    // Funções Aritméticas
    //abs() = absoluto
    $r = abs(num: 500);
    print("\nA resposta é $r");

    //base_convert()
    $r = base_convert(num: 254, from_base: 10, to_base: 2);
    echo "\n254 em Base 2 = $r";

    //Funções de arredondamento
    //ceil(), floor() e round()
    $n = ceil(7.5);
    echo "\n$n";

    $n = floor(7.5);
    echo "\n$n";

    $n = round(7.5);
    echo "\n$n";

    // min() e max()
    $r = min(3, 4, 5, 6, 7, 8, 2);
    echo "\n$r";

    $r = max(3, 4, 5, 6, 7, 8, 2, 0);
    echo "\n$r";

    //pi()
    $r = number_format(pi(), 2, '.', ""); // ou M_PI
    echo "\n$r";

    //pow() - potência
    $r = pow(2, 4);
    echo "\n$r";

    //sin(), cos() e tan()

    //sqrt() - raiz quadrada
    $r = sqrt(81); // ou 81 ** (1/2)
    echo "\n$r";
?>
