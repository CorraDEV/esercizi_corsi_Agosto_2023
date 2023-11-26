SELECT nome, dataNascita, numTelefono
FROM Impiegato
WHERE YEAR(dataNascita) > 1990
ORDER BY dataNascita;