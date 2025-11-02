USE exercicios;

CREATE TABLE IF NOT EXISTS Clientes(
	id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    email VARCHAR(50)
);

SELECT * FROM Clientes
WHERE nome LIKE 'A%' AND email LIKE '%@gmail.com';