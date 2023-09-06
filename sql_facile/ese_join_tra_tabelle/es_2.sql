SELECT nome, cognome, codice_fiscale, email, nome_mansione, ragione_sociale
FROM dipendenti, mansioni, aziende
WHERE dipendenti.id_mansione = mansioni.id AND dipendenti.id_azienda = aziende.id;