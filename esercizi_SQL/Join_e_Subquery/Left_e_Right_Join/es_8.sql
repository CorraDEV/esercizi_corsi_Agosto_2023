SELECT Autore.nome, Libro.titolo
FROM Autore
LEFT JOIN Libro ON Autore.id = Libro.id_autore;