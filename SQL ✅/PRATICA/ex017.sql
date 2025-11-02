USE exercicios;

CREATE TABLE IF NOT EXISTS Autores (
	id_autor INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(40),
    pais VARCHAR(40)
);

CREATE TABLE IF NOT EXISTS Publicacoes (
	id_publicacao INT PRIMARY KEY AUTO_INCREMENT,
    id_autor INT,
    titulo VARCHAR(40),
    ano YEAR,
    FOREIGN KEY (id_autor) REFERENCES Autores(id_autor)
);

SELECT nome FROM Autores
WHERE EXISTS (
	SELECT 1 FROM Publicacoes
    WHERE Publicacoes.id_autor = autores.id_autor AND ano > 2000
)
