SELECT corsi.nome_corso, COUNT(lezioni.id) AS totale_lezioni
FROM lezioni, corsi
WHERE lezioni.corso_id_fk = corsi.id
GROUP BY corsi.id;