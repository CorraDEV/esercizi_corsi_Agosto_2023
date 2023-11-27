SELECT Film.titolo, Genere.nome
FROM Film
INNER JOIN Genere ON Film.id_genere = Genere.id;