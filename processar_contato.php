<?php
// Habilitar exibição de erros (apenas para desenvolvimento)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir configuração do banco de dados
require_once 'config/database.php';

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter e sanitizar dados do formulário
    $nome = trim($_POST['name']);
    $email = trim($_POST['email']);
    $mensagem = trim($_POST['message']);
    
    // Validar dados
    $erros = [];
    
    if (empty($nome)) {
        $erros[] = "Nome é obrigatório";
    }
    
    if (empty($email)) {
        $erros[] = "E-mail é obrigatório";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = "E-mail inválido";
    }
    
    if (empty($mensagem)) {
        $erros[] = "Mensagem é obrigatória";
    }
    
    // Se não houver erros, salvar no banco de dados
    if (empty($erros)) {
        $conn = getConnection();
        
        // Verificar se a conexão foi bem-sucedida
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }
        
        // Preparar query para evitar SQL injection
        $stmt = $conn->prepare("INSERT INTO mensagens (nome, email, mensagem) VALUES (?, ?, ?)");
        if ($stmt === false) {
            die("Erro na preparação da query: " . $conn->error);
        }
        
        $stmt->bind_param("sss", $nome, $email, $mensagem);
        
        if ($stmt->execute()) {
            $response = [
                'success' => true,
                'message' => 'Mensagem enviada com sucesso!'
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'Erro ao enviar mensagem. Tente novamente.',
                'error' => $stmt->error
            ];
        }
        
        $stmt->close();
        closeConnection($conn);
    } else {
        $response = [
            'success' => false,
            'message' => implode('<br>', $erros)
        ];
    }
    
    // Retornar resposta em JSON
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}
?>