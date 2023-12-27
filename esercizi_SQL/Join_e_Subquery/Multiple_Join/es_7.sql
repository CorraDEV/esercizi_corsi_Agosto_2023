SELECT a.nome, f.titolo, r.nome
FROM Attore AS a
INNER JOIN Recitazione AS r ON a.id = r.id_attore
INNER JOIN Film AS f ON r.id_film = f.id
INNER JOIN Regista AS rg ON f.id_regista = rg.id;