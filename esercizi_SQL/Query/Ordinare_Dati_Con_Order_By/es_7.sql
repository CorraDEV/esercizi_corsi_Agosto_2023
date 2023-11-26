SELECT nome, cognome, indirizzo
FROM Cliente
WHERE nome IN ('Giulia', 'Marco')
ORDER BY cognome;