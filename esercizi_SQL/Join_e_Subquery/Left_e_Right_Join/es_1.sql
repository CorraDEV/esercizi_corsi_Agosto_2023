SELECT Studente.nome, Studente.cognome, Corso.nome
FROM Studente
LEFT JOIN Iscrizione ON Studente.id = Iscrizione.id_studente
LEFT JOIN Corso ON Studente.id_corso = Corso.id;