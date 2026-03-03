USE exercicios;

CREATE TABLE IF NOT EXISTS Empregados (
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(40),
    salario NUMERIC(8,2),
    departamento VARCHAR(30)
);

SELECT nome FROM Empregados
WHERE salario > ALL  (SELECT salario FROM Empregados WHERE departamento = 'Vendas');