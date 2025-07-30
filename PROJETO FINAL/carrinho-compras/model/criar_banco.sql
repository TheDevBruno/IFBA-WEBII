-- criar_banco.sql

CREATE DATABASE IF NOT EXISTS loja_informatica CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE loja_informatica;

-- Tabela usuários
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL -- senha hash (password_hash)
);

-- Tabela produtos
CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10,2) NOT NULL,
    estoque INT NOT NULL DEFAULT 0
);

-- Tabela produtos_saida (registra vendas ou retiradas)
CREATE TABLE IF NOT EXISTS produtos_saida (
    id INT AUTO_INCREMENT PRIMARY KEY,
    produto_id INT NOT NULL,
    quantidade INT NOT NULL,
    data_saida DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (produto_id) REFERENCES produtos(id)
);

-- Inserir usuário teste (senha = "123456" — gerada com password_hash)
INSERT INTO usuarios (usuario, senha) VALUES 
('admin', '$2y$10$e0NRdUn1Q50Y7XeTtXmJFu3v1QZpC0F4wGUWZwU1ajIxS38uX3JX6'); 
-- senha: 123456

-- Inserir produtos
INSERT INTO produtos (nome, descricao, preco, estoque) VALUES
('Mouse Gamer', 'Mouse com sensor óptico de alta precisão', 80.00, 15),
('Teclado Mecânico', 'Teclado mecânico RGB com switches Cherry MX', 350.00, 10),
('Monitor 24"', 'Monitor Full HD 24 polegadas', 900.00, 7),
('SSD 1TB', 'SSD rápido para seu computador', 550.00, 20),
('Placa de Vídeo RTX 3060', 'Placa de vídeo potente para jogos', 2500.00, 5);
