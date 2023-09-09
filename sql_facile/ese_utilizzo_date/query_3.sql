SELECT cognome, nome, DATE_FORMAT(data_completamento,'%d-%m-%Y') AS data_completamento
FROM utenti_corsi, utenti
WHERE utenti.id = utenti_corsi.utente_id_fk
AND data_completamento >= '2020-08-01'
AND data_completamento <= '2020-08-30';