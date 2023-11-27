SELECT Dipendente.nome, Manager.nome
FROM Dipendente
INNER JOIN Manager ON Dipendente.id_manager = Manager.id;