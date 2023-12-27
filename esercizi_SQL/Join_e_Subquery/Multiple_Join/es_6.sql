SELECT e.nome, d.nome, m.nome
FROM Impiegato AS e
INNER JOIN Dipendente AS d ON e.id_dipendente = d.id
JOIN Dipendente AS m ON d.id_manager = m.id;