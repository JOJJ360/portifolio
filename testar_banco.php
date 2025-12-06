<?php
// testar_banco.php
require_once 'config/database.php';

echo "<h1>Teste de Banco de Dados</h1>";

// Testar conexão
testConnection();

echo "<hr>";

// Testar inserção manual
$conn = getConnection();
$test_nome = "Teste Automático";
$test_email = "teste@exemplo.com";
$test_msg = "Esta é uma mensagem de teste";

$sql = "INSERT INTO mensagens (nome, email, mensagem) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "sss", $test_nome, $test_email, $test_msg);
    
    if (mysqli_stmt_execute($stmt)) {
        echo "<p style='color: green;'>✓ Inserção manual FUNCIONOU!</p>";
        echo "<p>ID inserido: " . mysqli_insert_id($conn) . "</p>";
    } else {
        echo "<p style='color: red;'>✗ Erro na inserção: " . mysqli_error($conn) . "</p>";
    }
    
    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>