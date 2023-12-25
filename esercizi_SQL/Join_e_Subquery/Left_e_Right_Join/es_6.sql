SELECT Film.titolo, Genere.nome
FROM Film
LEFT JOIN Genere ON Film.id_genere = Genere.id;