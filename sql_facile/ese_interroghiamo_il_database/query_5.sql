SELECT utenti.username, COUNT(corso_id_fk) AS n_corsi_in_cui_è_iscritto
FROM utenti_corsi, utenti
WHERE utenti_corsi.utente_id_fk = utenti.id 
AND stato = 'Iscritto'
GROUP BY utenti.id;