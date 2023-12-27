SELECT p.nome AS "nome prodotto", f.nome AS "nome fornitore", d.nome AS "nome dipartimento"
FROM Prodotto AS p
INNER JOIN Fornitore AS f ON p.id_fornitore = f.id
INNER JOIN Dipartimento AS d ON p.id_dipartimento = d.id;