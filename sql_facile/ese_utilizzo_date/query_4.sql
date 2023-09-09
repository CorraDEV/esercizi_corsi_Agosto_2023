SELECT cognome, nome, DATE_FORMAT(data_iscrizione,'%d-%m-%Y') AS data_iscrizione, DATE_FORMAT(data_completamento,'%d-%m-%Y') AS data_completamento
FROM utenti_corsi, utenti
WHERE utenti.id = utenti_corsi.utente_id_fk
AND DATEDIFF(utenti_corsi.data_iscrizione, utenti_corsi.data_completamento) < 30;