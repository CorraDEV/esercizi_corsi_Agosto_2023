SELECT Prodotto.nome, Fornitore.nome
FROM Prodotto
INNER JOIN Fornitore ON Prodotto.id_fornitore = Fornitore.id;