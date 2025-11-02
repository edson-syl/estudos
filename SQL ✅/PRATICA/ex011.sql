USE exercicios;

CREATE TABLE IF NOT EXISTS Pedidos (
	id_pedido INT PRIMARY KEY AUTO_INCREMENT,
    id_client INT,
    data_pedido DATE
);

SELECT * FROM pedidos
WHERE data_pedido IS NULL;

