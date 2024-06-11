-- Conectar ao MySQL e criar o banco de dados
CREATE DATABASE IF NOT EXISTS Genshin;

-- Selecionar o banco de dados
USE Genshin;

-- Criar a tabela "personagens"
CREATE TABLE IF NOT EXISTS personagens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    elemento VARCHAR(50) NOT NULL,
    arma VARCHAR(50) NOT NULL,
    raridade INT NOT NULL
);

-- Criar a tabela "usuarios"
CREATE TABLE IF NOT EXISTS usuarios (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nickname VARCHAR(40) NOT NULL,
    email VARCHAR(80) NOT NULL,
    userPassword VARCHAR(30) NOT NULL  
);