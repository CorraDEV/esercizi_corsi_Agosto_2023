SELECT lezioni.titolo, nome_corso, nome 
FROM lezioni, corsi, categorie
WHERE corso_id_fk = corsi.id
AND categoria_id_fk = categorie.id;