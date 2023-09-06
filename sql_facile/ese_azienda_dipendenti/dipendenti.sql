CREATE TABLE dipendenti(
	id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	id_azienda INT(10) UNSIGNED NOT NULL,
	nome VARCHAR(10) NOT NULL,
	cognome VARCHAR(10) NOT NULL,
	codice_fiscale VARCHAR(16) NOT NULL,
	email VARCHAR(50) NOT NULL,
	pass VARCHAR(20) NOT NULL,
	data_di_nascita DATE NOT NULL,	
	FOREIGN KEY (id_azienda) REFERENCES aziende(id),
	PRIMARY KEY(id)
);