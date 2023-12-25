SELECT Studente.nome, Studente.cognome, Corso.nome
FROM Studente
CROSS JOIN Corso;