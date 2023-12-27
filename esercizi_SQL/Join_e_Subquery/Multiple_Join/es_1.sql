SELECT d1.nome AS "nome dipendente", d1.cognome AS "cognome dipendente", d2.nome AS "nome manager", 
d2.cognome AS "cognome manager", di.nome AS "nome dipartimento"
FROM Dipendente AS d1
INNER JOIN Dipendente AS d2 ON d1.id_manager = d2.id
INNER JOIN Dipartimento AS di ON d1.id_dipartimento = di.id;