USE exercicios;

CREATE TABLE IF NOT EXISTS Diretores (
	id_diretor INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS Filmes (
	id_filme INT PRIMARY KEY AUTO_INCREMENT,
    id_diretor INT,
    titulo VARCHAR(40),
    ano DATE,
    FOREIGN KEY (id_diretor) REFERENCES Diretores(id_diretor)
);

INSERT INTO Diretores (nome)
VALUES
('Christopher Nolan'),
('Steven Spielberg'),
('Quentin Tarantino');

INSERT INTO Filmes (id_diretor, titulo, ano)
VALUES
(1, 'A Origem', '2010-07-16'),
(1, 'Interestelar', '2014-11-07'),
(2, 'Jurassic Park', '1993-06-11'),
(2, 'E.T.', '1982-06-11'),
(3, 'Django Livre', '2012-12-25');

SELECT 
	filmes.titulo AS TITULO,
    diretores.nome AS DIRETOR
FROM Filmes
LEFT JOIN Diretores ON filmes.id_diretor = diretores.id_diretor
WHERE YEAR(filmes.ano) > 2010;