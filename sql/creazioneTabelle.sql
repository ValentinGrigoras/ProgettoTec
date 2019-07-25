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
  nome varchar(20) ,
  cognome varchar(15),
  dataDiNascita date,
  CF varchar(16) ,
  tel varchar(16),
  indirizzo text,
  comune text,
  prov varchar(2),
  stato varchar(2) DEFAULT 'IT',
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
  nome varchar(255) NOT NULL,
  obiettivo text NOT NULL,
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
  tel varchar(16),
  dataDiNascita date,
  indirizzo text,
  comune text,
  prov varchar(2),
  stato varchar(2) DEFAULT 'IT',
  salaPesi boolean NOT NULL
) ENGINE=InnoDb;
--
-- Creazione tabella 'Orario'
--
CREATE TABLE Orario (
  idCorso int(11),
  giorno enum('Lun','Mar','Mer','Gio','Ven','Sab') NOT NULL,
  stanza enum('Sala corsi', 'Sala pesi', 'Functional zone', 'Piscina') DEFAULT 'Sala corsi',
  oraI time NOT NULL,
  oraF time NOT NULL,
  idAllenatore int(11),
  PRIMARY KEY (stanza, giorno, oraI),
  FOREIGN KEY (idCorso) REFERENCES Corsi(idCorso)
  		ON DELETE NO ACTION ON UPDATE CASCADE,
  FOREIGN KEY (idAllenatore) REFERENCES Allenatore(idAllenatore)
  		ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB;
--
-- Creazione tabella 'Galleria'
--
CREATE TABLE Galleria (
  nome varchar(50) PRIMARY KEY,
  dimensione varchar(25) NOT NULL,
  estensioneFile varchar(25) NOT NULl,
  percorso varchar(255) NOT NULL,
    riferimento varchar(255)
) ENGINE=InnoDB;
--
-- Creazione tabella 'Admin'
--
CREATE TABLE Admin (
  username varchar(30) PRIMARY KEY,
  password varchar(30) NOT NULL
) ENGINE=InnoDB;
