SELECT Cliente.nome, Spedizione.indirizzo
FROM Cliente
CROSS JOIN Spedizione;