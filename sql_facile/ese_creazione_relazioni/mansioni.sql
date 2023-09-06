CREATE TABLE mansioni(
	id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	nome_mansione VARCHAR(20) NOT NULL,
	PRIMARY KEY(id)  
);

ALTER TABLE dipendenti
ADD id_mansione INT(10) UNSIGNED NOT NULL,
ADD FOREIGN KEY (id_mansione) REFERENCES mansioni(id);