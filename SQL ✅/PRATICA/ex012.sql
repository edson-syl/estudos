USE exercicios;

CREATE TABLE IF NOT EXISTS Professores (
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    cidade VARCHAR(30)
);

CREATE TABLE IF NOT EXISTS Alunos (
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    cidade VARCHAR(30)
);

INSERT INTO Professores (nome, cidade)
VALUES 
('Carlos Silva', 'São Paulo'),
('Maria Oliveira', 'Rio de Janeiro'),
('João Pereira', 'Belo Horizonte');

INSERT INTO Alunos (nome, cidade)
VALUES 
('Ana Souza', 'São Paulo'),
('Pedro Santos', 'Curitiba'),
('Luiza Fernandes', 'Salvador');


SELECT nome, cidade FROM Professores
UNION SELECT nome, cidade FROM Alunos;