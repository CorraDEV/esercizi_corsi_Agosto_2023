SELECT Prodotto.nome, Prodotto.prezzo, Fornitore.nome
FROM Prodotto
LEFT JOIN Fornitore ON Prodotto.id_fornitore = Fornitore.id;