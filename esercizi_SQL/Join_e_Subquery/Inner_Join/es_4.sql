SELECT Cliente.nome, Spedizione.indirizzo
FROM Cliente
INNER JOIN Spedizione ON Cliente.id = Spedizione.id_cliente;