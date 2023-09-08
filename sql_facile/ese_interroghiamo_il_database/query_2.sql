SELECT lezioni.titolo, nome_corso 
FROM lezioni, corsi
WHERE corso_id_fk = corsi.id; 