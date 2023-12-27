SELECT f.nome, p.nome, d.nome
FROM Fornitore AS f
INNER JOIN Prodotto AS p ON f.id = p.id_fornitore
INNER JOIN Dipartimento AS d ON f.id_dipartimento = d.id;