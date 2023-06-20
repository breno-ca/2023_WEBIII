CREATE DATABASE IF NOT EXISTS ifpr;

USE ifpr;

CREATE TABLE IF NOT EXISTS produto (
	produto_id INT NOT NULL AUTO_INCREMENT,
	produto_nome VARCHAR(100),
    produto_descricao VARCHAR(100),
    produto_status INT,
    produto_datacriacao DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (produto_id)
);