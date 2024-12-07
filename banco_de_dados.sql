CREATE DATABASE produtos_db;

USE produtos_db;

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero_produto VARCHAR(100) NOT NULL UNIQUE,
    nome_peca VARCHAR(255) NOT NULL,
    valor DECIMAL(10, 2) NOT NULL
);