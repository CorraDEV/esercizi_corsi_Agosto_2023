SELECT i.nome, d.nome
FROM Impiegato AS i
INNER JOIN Dipartimento AS d ON i.id_dipartimento = d.id;