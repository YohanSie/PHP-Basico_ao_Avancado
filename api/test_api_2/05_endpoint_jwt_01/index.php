<?php
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
require_once __DIR__ . '/../../vendor/autoload.php';

header("Content-Type: application/json; charset=UTF-8");

// ==========================================
// 1. Verifica se o header Authorization existe
// ==========================================
$headers = getallheaders();

if(!key_exists('Authorization', $headers)){
    http_response_code(401);
    echo json_encode([
        'status' => 'error',
        'message' => 'Token não fornecido'
    ]);
    exit;
}

// ==========================================
// 2. Extrai o token do header
// ==========================================
$authorization = $headers['Authorization'];

// Formato esperado: "Bearer eyJhbGc..."
if(!preg_match('/Bearer\s(\S+)/', $authorization, $matches)){
    http_response_code(401);
    echo json_encode([
        'status' => 'error',
        'message' => 'Formato de token inválido'
    ]);
    exit;
}

$jwt_token = $matches[1];  // Pega apenas o token (sem "Bearer")

// ==========================================
// 3. Valida o token com a chave
// ==========================================
$jwt_key = "dVIns6oTyVvsnYzmaTyh3YPS7alsyCFt";

try {
    // ✅ O decode já faz TODA a validação:
    // - Verifica a assinatura
    // - Verifica se expirou
    // - Verifica o algoritmo
    $decoded = JWT::decode($jwt_token, new Key($jwt_key, 'HS256'));
    
    // ✅ Token válido! Pode acessar os dados
    $res = [
        'status' => 'success',
        'message' => 'Acesso efetuado com sucesso à API',
        'usuario' => $decoded->usuario,
        'token_expira_em' => date('Y-m-d H:i:s', $decoded->exp),
        'time_response' => time()
    ];
    
    echo json_encode($res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    
} catch (\Firebase\JWT\ExpiredException $e) {
    // Token expirado
    http_response_code(401);
    echo json_encode([
        'status' => 'error',
        'message' => 'Token expirado'
    ]);
    
} catch (\Firebase\JWT\SignatureInvalidException $e) {
    // Assinatura inválida (token adulterado)
    http_response_code(401);
    echo json_encode([
        'status' => 'error',
        'message' => 'Token inválido - assinatura não confere'
    ]);
    
} catch (Exception $e) {
    // Outros erros
    http_response_code(401);
    echo json_encode([
        'status' => 'error',
        'message' => 'Token inválido: ' . $e->getMessage()
    ]);
}