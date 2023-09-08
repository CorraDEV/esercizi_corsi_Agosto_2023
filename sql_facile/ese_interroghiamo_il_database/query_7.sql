SELECT corsi.nome_corso, lezioni.titolo
FROM corsi
LEFT JOIN lezioni ON corsi.id = lezioni.corso_id_fk;