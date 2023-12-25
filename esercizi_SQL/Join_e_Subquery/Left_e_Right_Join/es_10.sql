SELECT Prodotto.nome, Prodotto.prezzo, Fornitore.nome
FROM Prodotto
RIGHT JOIN Fornitore ON Prodotto.id_fornitore = Fornitore.id;