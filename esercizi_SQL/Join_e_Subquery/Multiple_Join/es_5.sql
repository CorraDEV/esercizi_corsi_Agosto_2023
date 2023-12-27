SELECT c.nome, p.nome, d.quantita
FROM Cliente AS c
INNER JOIN Ordine AS o ON c.id = o.id_cliente
INNER JOIN DettaglioOrdine AS d ON o.id = d.id_ordine
INNER JOIN Prodotto AS p ON d.id_prodotto = p.id;