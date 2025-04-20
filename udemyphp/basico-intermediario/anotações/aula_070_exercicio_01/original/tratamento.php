<?php

session_start();

// Lógica de tratamento do formulário
if ($_SERVER["REQUEST_METHOD"] != 'POST') {
    die('Acesso Inválido');
}

// Obtendo os valores do formulário corretamente
$valor1 = $_POST["valor1"] ?? '';
$valor2 = $_POST["valor2"] ?? '';

// Inicializando o array de inputs
$inputs = [
    'valor1' => ['erro' => '', 'valor' => ''],
    'valor2' => ['erro' => '', 'valor' => '']
];

// Validação de valor1
if (!is_numeric($valor1)) {
    $inputs['valor1']['erro'] = 'Preencha o campo com um valor numérico positivo';
} else {
    $inputs['valor1']['valor'] = (float)$valor1;
    if ($inputs['valor1']['valor'] < 0) {
        $inputs['valor1']['erro'] = 'Preencha o campo com um valor maior que zero';
    }
}
// Validação de valor2
if (!is_numeric($valor2)) {
    $inputs['valor2']['erro'] = 'Preencha o campo com um valor numérico positivo';
} else {
    $inputs['valor2']['valor'] = (float)$valor2;
    if ($inputs['valor2']['valor'] < 0) {
        $inputs['valor2']['erro'] = 'Preencha o campo com um valor maior que zero';
    }
}

// Se houver erros, redireciona de volta
if (!empty($inputs['valor1']['erro']) || !empty($inputs['valor2']['erro'])) {
    $_SESSION['inputs'] = $inputs;
    header('Location: index.php');
    return;
}

// Se não houver erros, realiza a multiplicação
echo '<h1>Multiplicação de Valores</h1>';
echo '<p><b>' . ($inputs['valor1']['valor'] * $inputs['valor2']['valor']) . '</b></p>';
echo '<p>Fim do Exercício</p>';
