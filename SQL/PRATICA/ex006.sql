USE exercicios;

CREATE TABLE IF NOT EXISTS Medicamentos(
	id_medicamento INT PRIMARY KEY AUTO_INCREMENT,
    nome_medicamento VARCHAR(40),
    quantidade INT
);

UPDATE Medicamentos
SET quantidade = 10
WHERE quantidade = 5;



