SELECT Libro.Titolo, Autore.Nome
FROM Libro
LEFT JOIN Autore ON Libro.ID_Autore = Autore.ID;