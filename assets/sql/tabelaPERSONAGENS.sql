-- Conectar ao MySQL e criar o banco de dados
CREATE DATABASE Genshin;

-- Selecionar o banco de dados
USE Genshin;

-- Criar a tabela "personagens"
CREATE TABLE personagens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    elemento VARCHAR(50) NOT NULL,
    arma VARCHAR(50) NOT NULL,
    raridade INT NOT NULL
);