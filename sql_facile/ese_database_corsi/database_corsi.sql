CREATE DATABASE IF NOT EXISTS `corsi`;
USE `corsi`;

CREATE TABLE IF NOT EXISTS `corsi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_corso` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `descrizione` longtext,
  `costo` float unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `iscrizioni` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_iscrizione_corso` date NOT NULL,
  `data_completamento_corso` date DEFAULT NULL,
  `stato_completamento` tinyint(1) NOT NULL COMMENT '1 = completato  0 = non completato',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `iscrizioni_utenti` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_utente` int(10) unsigned NOT NULL,
  `id_iscrizione` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_iscrizioni_utenti_iscrizioni` (`id_iscrizione`),
  KEY `FK_iscrizioni_utenti_utenti` (`id_utente`),
  CONSTRAINT `FK_iscrizioni_utenti_iscrizioni` FOREIGN KEY (`id_iscrizione`) REFERENCES `iscrizioni` (`id`),
  CONSTRAINT `FK_iscrizioni_utenti_utenti` FOREIGN KEY (`id_utente`) REFERENCES `utenti` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `lezioni` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_lezione` varchar(50) NOT NULL,
  `tipo` enum('video','audio','pdf') NOT NULL,
  `durata` time NOT NULL,
  `id_corso` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_lezioni_corsi` (`id_corso`),
  CONSTRAINT `FK_lezioni_corsi` FOREIGN KEY (`id_corso`) REFERENCES `corsi` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `utenti` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cognome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `utenti_corsi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_utente` int(10) unsigned NOT NULL,
  `id_corso` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_utenti_corsi_utenti` (`id_utente`),
  KEY `FK_utenti_corsi_corsi` (`id_corso`),
  CONSTRAINT `FK_utenti_corsi_corsi` FOREIGN KEY (`id_corso`) REFERENCES `corsi` (`id`),
  CONSTRAINT `FK_utenti_corsi_utenti` FOREIGN KEY (`id_utente`) REFERENCES `utenti` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `utenti_lezioni` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_lezione` int(10) unsigned NOT NULL,
  `id_utente` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_utenti_lezioni_lezioni` (`id_lezione`),
  KEY `FK_utenti_lezioni_utenti` (`id_utente`),
  CONSTRAINT `FK_utenti_lezioni_lezioni` FOREIGN KEY (`id_lezione`) REFERENCES `lezioni` (`id`),
  CONSTRAINT `FK_utenti_lezioni_utenti` FOREIGN KEY (`id_utente`) REFERENCES `utenti` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;