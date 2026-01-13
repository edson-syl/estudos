USE exercicios;

CREATE TABLE IF NOT EXISTS Vendas (
	id_vendas INT PRIMARY KEY AUTO_INCREMENT,
    valor NUMERIC(10,2),
    desconto NUMERIC (5,2)
);

INSERT INTO Vendas (valor, desconto) VALUES
(150.00, 15.00),
(299.99, 50.00),
(75.50, 5.50);

SELECT
valor - desconto AS valor_final
FROM vendas;