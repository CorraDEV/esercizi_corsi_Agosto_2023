SELECT Fornitore.nome, Prodotto.nome
FROM Fornitore
INNER JOIN Prodotto ON Fornitore.id = Prodotto.id_fornitore;