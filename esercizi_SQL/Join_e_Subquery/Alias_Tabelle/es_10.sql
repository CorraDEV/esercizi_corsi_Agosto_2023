SELECT f.nome, p.nome
FROM Fornitore AS f
INNER JOIN Prodotto AS p ON f.id = p.id_fornitore;