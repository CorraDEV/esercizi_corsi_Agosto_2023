SELECT d1.nome, d2.nome AS Manager
FROM Dipendente AS d1
INNER JOIN Dipendente AS d2 ON d1.id_manager = d2.id;