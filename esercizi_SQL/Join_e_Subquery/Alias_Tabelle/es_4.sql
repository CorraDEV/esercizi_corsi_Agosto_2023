SELECT c.nome, s.indirizzo
FROM Cliente AS c
INNER JOIN Spedizione AS s ON c.id = s.id_cliente;