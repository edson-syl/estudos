USE exercicios;

SELECT
	pedidos.id_pedido AS Numero,
    clientes.nome AS Cliente,
    pedidos.data_pedido AS Data_pedido
    
FROM Pedidos
INNER JOIN Clientes ON Pedidos.id_cliente = Clientes.id_cliente;