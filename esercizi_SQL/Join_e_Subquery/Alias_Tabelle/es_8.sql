SELECT a.nome, l.titolo
FROM Autore AS a
INNER JOIN Libro AS l ON a.id = l.id_autore;