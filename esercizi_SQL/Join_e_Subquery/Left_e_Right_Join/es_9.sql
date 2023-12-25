SELECT Dipendente.nome, Manager.nome
FROM Dipendente
LEFT JOIN Manager ON Dipendente.id_manager = Manager.id;