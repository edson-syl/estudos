USE exercicios;

CREATE TABLE IF NOT EXISTS Funcionarios(
	id_func INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(50),
    salario NUMERIC(10, 2),
    departamento VARCHAR(30)
);

SELECT SUM(salario) FROM funcionarios
WHERE departamento = 'TI';

SELECT ROUND(AVG(salario), 0) FROM funcionarios 
WHERE departamento = 'Marketing';

SELECT MIN(salario) AS Menor_Salario , MAX(salario) AS Maior_Salario FROM funcionarios;