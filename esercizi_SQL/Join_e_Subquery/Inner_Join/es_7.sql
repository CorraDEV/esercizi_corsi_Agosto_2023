SELECT Cliente.nome, Prodotto.nome
FROM Cliente
INNER JOIN Prodotto ON Cliente.id_prodotto = Prodotto.id;