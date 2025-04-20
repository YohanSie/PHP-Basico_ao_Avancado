<?php

$lojas = [
    'porto' => [
        'telefone' => '12345',
        'email' => 'email@email.com'
    ],
    'lisboa' => [
        'telefone' => '12345',
        'email' => 'lisboa@email.com'
    ],
    'coimbra' => [
        'telefone' => '12345',
        'email' => 'email@email.com'
    ]
];

echo '<pre>';
print_r($lojas);
echo '</pre>';

// apresentar um valor especifico

echo $lojas['lisboa']['email'];

$notas = [
    [10, 20, 30],
    [100, 200, 300],
    [1000, 2000, 3000]
];

echo '<pre>';
print_r($notas);
echo '</pre>';

echo $notas[2][0];