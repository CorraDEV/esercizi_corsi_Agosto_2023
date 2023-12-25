SELECT Cliente.nome, Prodotto.nome
FROM Cliente
LEFT JOIN Ordine ON Cliente.id = Ordine.id_cliente
LEFT JOIN DettaglioOrdine ON Ordine.id = DettaglioOrdine.id_ordine
LEFT JOIN Prodotto ON DettaglioOrdine.id_prodotto = Prodotto.id;