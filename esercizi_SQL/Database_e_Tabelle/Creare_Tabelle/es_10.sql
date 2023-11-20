CREATE TABLE Prenotazione(
	id INT PRIMARY KEY,
    id_cliente INT,
    id_camera INT,
    data_arrivo DATE,
    FOREIGN KEY(id_cliente) REFERENCES Cliente(id),
    FOREIGN KEY(id_camera) REFERENCES Camera(id)
)