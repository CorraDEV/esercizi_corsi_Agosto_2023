SELECT cognome, nome, DATE_FORMAT(data_completamento, '%d-%m-%Y %H:%i:%s') AS data_completamento
FROM utenti_corsi, utenti
WHERE utenti.id = utenti_corsi.utente_id_fk
AND YEAR(data_completamento) = 2019;