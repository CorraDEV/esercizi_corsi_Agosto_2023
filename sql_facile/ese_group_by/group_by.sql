SELECT categories.name, COUNT(id_prodotto) AS totale_prodotti
FROM categories, categories_product
WHERE categories.id = id_categoria
GROUP BY categories.id;