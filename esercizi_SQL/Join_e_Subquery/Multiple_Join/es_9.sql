SELECT s.nome, c.nome, d.nome
FROM Studente AS s
INNER JOIN Iscrizione AS i ON s.id = i.id_studente
INNER JOIN Corso AS c ON i.id_corso = c.id
INNER JOIN Dipartimento AS d ON c.id_dipartimento = d.id;