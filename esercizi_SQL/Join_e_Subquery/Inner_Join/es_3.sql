SELECT Impiegato.nome, Dipartimento.nome
FROM Impiegato
INNER JOIN Dipartimento ON Impiegato.id_dipartimento = Dipartimento.id;