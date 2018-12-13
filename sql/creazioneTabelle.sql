DROP TABLE IF EXISTS Orario;
DROP TABLE IF EXISTS Allenatore;
DROP TABLE IF EXISTS CorsiScelti;
DROP TABLE IF EXISTS Contratto;
DROP TABLE IF EXISTS Admin;
DROP TABLE IF EXISTS Galleria;
DROP TABLE IF EXISTS Utente;
DROP TABLE IF EXISTS Abbonamento;
DROP TABLE IF EXISTS Corsi;
--
-- Creazione tabella 'Utente'
--
CREATE TABLE Utente (
  idUtente int(11) AUTO_INCREMENT PRIMARY KEY,
  username varchar(30) NOT NULL,
  password varchar(30) NOT NULL,
  nome varchar(20) NOT NULL,
  cognome varchar(15) NOT NULL,
  dataDiNascita date NOT NULL,
  CF varchar(16) NOT NULL,
  tel varchar(10),
  indirizzo text NOT NULL,
  citta text NOT NULL,
  prov varchar(2) NOT NULL,
  stato varchar(2) NOT NULL DEFAULT 'IT',
  UNIQUE (username)
) ENGINE=InnoDB;
--
-- Creazione tabella 'Abbonamento'
--
CREATE TABLE Abbonamento (
  idAbbonamento int(11) AUTO_INCREMENT PRIMARY KEY,
  tipoAbbonamento enum('Annuale', 'Semestrale', 'Trimestrale', 'Mensile'),
  prezzo decimal(4,2) NOT NULL,
  descrizione text
) ENGINE=InnoDB;
--
-- Creazione tabella 'Contratto'
--
CREATE TABLE Contratto (
  idContratto int(11) AUTO_INCREMENT PRIMARY KEY,
  idUtente int(11) NOT NULL,
  idAbbonamento int(11) NOT NULL,
  data date NOT NULL,
  dataScadenza date NOT NULL,
  FOREIGN KEY (idUtente) REFERENCES Utente(idUtente)
                ON DELETE NO ACTION ON UPDATE CASCADE,
  FOREIGN KEY (idAbbonamento) REFERENCES Abbonamento(idAbbonamento)
                ON DELETE NO ACTION ON UPDATE CASCADE 
) ENGINE=InnoDB;
--
-- Creazione tabella 'Corsi'
--
CREATE TABLE Corsi (
  idCorso int(11) AUTO_INCREMENT PRIMARY KEY,
  nome varchar(10) NOT NULL,
  obiettivo varchar(30) NOT NULL,
  descrizione text,
  categoria varchar(100),
  durata int(3),
  livello enum('facile','normale','difficile'),
  costo decimal(4,2) NOT NULL
) ENGINE=InnoDB;
--
-- Creazione tabella 'CorsiScelti'
--
CREATE TABLE CorsiScelti (
  idContratto int(11),
  idCorso int(11) NOT NULL,
  dataScadenza date DEFAULT NULL,
  PRIMARY KEY (idContratto, idCorso),
  FOREIGN KEY (idContratto) REFERENCES Contratto(idContratto)
                ON DELETE NO ACTION ON UPDATE CASCADE,
  FOREIGN KEY (idCorso) REFERENCES Corsi(idCorso)
                ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB;

--
-- Creazione tabella 'Allenatore'
--
CREATE TABLE Allenatore (
  idAllenatore int(11) AUTO_INCREMENT PRIMARY KEY,
  CF varchar(16) NOT NULL,
  nome varchar(20) NOT NULL,
  cognome varchar(15) NOT NULL,
  email varchar(255),
  tel varchar(10) NOT NULL,
  dataDiNascita date NOT NULL,
  indirizzo text NOT NULL,
  citta text NOT NULL,
  prov varchar(2) NOT NULL,
  stato varchar(2) NOT NULL DEFAULT 'IT',
  salaPesi boolean NOT NULL,
  corso1 int(11),
  corso2 int(11),
  corso3 int(11),
  FOREIGN KEY (corso1) REFERENCES Corsi(idCorso)
  		ON DELETE SET NULL ON UPDATE CASCADE,
  FOREIGN KEY (corso2) REFERENCES Corsi(idCorso)
  		ON DELETE SET NULL ON UPDATE CASCADE,
  FOREIGN KEY (corso3) REFERENCES Corsi(idCorso)
  		ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDb;
--
-- Creazione tabella 'Orario'
--
CREATE TABLE Orario (
  stanza enum('Sala corsi', 'Sala pesi', 'Functional zone', 'Piscina') DEFAULT 'Sala corsi',
  giorno enum('Lun','Mar','Mer','Gio','Ven','Sab') NOT NULL,
  idCorso int(11),
  oraI time NOT NULL,
  oraF time NOT NULL,
  PRIMARY KEY (stanza, giorno, oraI),
  FOREIGN KEY (idCorso) REFERENCES Corsi(idCorso)
  		ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB;
--
-- Creazione tabella 'Galleria'
--
CREATE TABLE Galleria (
  nome varchar(50) PRIMARY KEY,
  dimensione varchar(25) NOT NULL,
  estensioneFile varchar(25) NOT NULl,
  percorso varchar(255) NOT NULL
) ENGINE=InnoDB;
--
-- Creazione tabella 'Admin'
--
CREATE TABLE Admin (
  username varchar(30) PRIMARY KEY,
  password varchar(30) NOT NULL
) ENGINE=InnoDB;