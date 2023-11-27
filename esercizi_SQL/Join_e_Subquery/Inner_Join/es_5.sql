SELECT Libro.titolo, Autore.nome
FROM Libro
INNER JOIN Autore ON Libro.id_autore = Autore.id;