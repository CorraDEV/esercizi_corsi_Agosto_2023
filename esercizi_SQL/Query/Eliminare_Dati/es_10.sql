DELETE FROM Ordine
WHERE ID NOT IN (
    SELECT MIN(ID)
    FROM Ordine
    GROUP BY NumeroOrdine
);