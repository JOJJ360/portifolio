-- Criar banco de dados
CREATE DATABASE IF NOT EXISTS portfolio_db;
USE portfolio_db;

-- Criar tabela de mensagens
CREATE TABLE IF NOT EXISTS mensagens (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    mensagem TEXT NOT NULL,
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    lida BOOLEAN DEFAULT FALSE
);

-- Inserir alguns dados de exemplo (opcional)
INSERT INTO mensagens (nome, email, mensagem) VALUES 
('João Silva', 'joao@exemplo.com', 'Gostei muito do seu portfólio!'),
('Maria Santos', 'maria@exemplo.com', 'Parabéns pelo trabalho!');