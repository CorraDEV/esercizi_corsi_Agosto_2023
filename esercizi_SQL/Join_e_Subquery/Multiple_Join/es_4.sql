SELECT a.nome, l.titolo, g.nome
FROM Autore AS a
INNER JOIN Libro AS l ON a.id = l.id_autore
INNER JOIN Genere AS g ON l.id_genere = g.id;