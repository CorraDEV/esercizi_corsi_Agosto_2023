SELECT Studente.Nome, Corso.Nome
FROM Studente
INNER JOIN Corso ON Studente.id_corso = Corso.id;