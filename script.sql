CREATE DATABASE GestaoEventos;

USE GestaoEventos;

CREATE TABLE eventos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    data_evento DATE,
    local_evento VARCHAR(255),
    horario_evento TIME,
    imagem VARCHAR(255)
);

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    senha VARCHAR(255)
);
