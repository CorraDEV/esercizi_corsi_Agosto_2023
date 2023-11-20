CREATE TABLE Carrello(
	id INT PRIMARY KEY,
    id_cliente INT,
    id_prodotto INT,
    quant INT,
    FOREIGN KEY(id_cliente) REFERENCES Cliente(id),
    FOREIGN KEY(id_prodotto) REFERENCES Prodotto(id)
)