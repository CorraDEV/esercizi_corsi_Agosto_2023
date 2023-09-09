SELECT nome_corso, cognome, nome, DATE_FORMAT(data_iscrizione, '%d-%m-%Y %H:%i:%s') AS data_iscrizione, DATE_FORMAT(data_completamento, '%d-%m-%Y %H:%i:%s') AS data_completamento
FROM corsi, utenti_corsi, utenti
WHERE corsi.id = utenti_corsi.corso_id_fk
AND utenti.id = utenti_corsi.utente_id_fk
AND data_completamento IS NOT NULL;