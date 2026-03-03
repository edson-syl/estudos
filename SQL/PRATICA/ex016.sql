USE exercicios;

CREATE TABLE IF NOT EXISTS Projetos (
	id_projeto INT PRIMARY KEY AUTO_INCREMENT,
    orcamento NUMERIC(10, 2),
    gerente VARCHAR(50)
);


SELECT gerente AS Nome_Gerente FROM Projetos
WHERE orcamento > (SELECT orcamento FROM Projetos WHERE id_projeto = 6);