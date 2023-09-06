SELECT nome, cognome, codice_fiscale, email, nome_mansione
FROM dipendenti, mansioni
WHERE dipendenti.id_mansione = mansioni.id;