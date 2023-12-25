SELECT Cliente.nome, Spedizione.indirizzo
FROM Cliente
LEFT JOIN Spedizione ON Cliente.id = Spedizione.id_cliente;