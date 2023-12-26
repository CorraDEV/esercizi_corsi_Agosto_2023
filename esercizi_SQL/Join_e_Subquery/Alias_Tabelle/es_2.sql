SELECT p.nome, f.nome
FROM Prodotto AS p
INNER JOIN Fornitore AS f ON p.id_fornitore = f.id;