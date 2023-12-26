SELECT f.titolo, g.nome
FROM Film AS f
INNER JOIN Genere AS g ON f.id_genere = g.id;