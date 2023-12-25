SELECT Impiegato.nome, Impiegato.cognome, Dipartimento.nome
FROM Impiegato
LEFT JOIN Dipartimento ON Impiegato.id_dipartimento = Dipartimento.id