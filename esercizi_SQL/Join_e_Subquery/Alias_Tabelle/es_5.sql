SELECT l.titolo, a.nome
FROM Libro AS l
INNER JOIN Autore AS a ON l.id_autore = a.id;