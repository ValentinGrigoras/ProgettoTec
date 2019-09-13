<?php

namespace Database;

class Database {


    const HOST_DB = "localhost";
    const USERNAME = "tecweb";
    const PASSWORD = "TecWeb";
    const DB_NAME = "Palestra";
  /*
    const HOST_DB = "localhost";
    const USERNAME = "root";
    const PASSWORD = "Chemer9.";
    const DB_NAME = "Palestra";
   */
    private static $connection;

    public function __construct() {
        if (!self::isConnected()) {
            self::$connection = new \mysqli(static::HOST_DB, static::USERNAME, static::PASSWORD, static::DB_NAME);
            self::$connection->set_charset('utf8');
            
        }
        return self::isConnected();
    }
    public static function getConnection() {
        return $connection;
    }

    public static function disconnect() {
        if (self::isConnected())
            self::$connection->close();
    }

    public static function isConnected() {
        if (isset(self::$connection) && !self::$connection->connect_errno)
            return true;
        return false;
    }

    public static function selectUser($email) {
        $email = self::$connection->real_escape_string($email);
        $query = "SELECT email FROM Utente WHERE email = \"$email\";";
        $users = self::selectRows($query);
        if (isset($users))
            return $users[0];
        return null;
    }
    private static function insertUpdateDelete($query) {
        if (self::isConnected()) {
            self::$connection->query($query);
            if (self::$connection->affected_rows > 0){
                return true;
            }
        }
        return false;
    }
    private static function selectRows($query) {
        if (self::isConnected()) {
            $result = self::$connection->query($query);
            if ($result->num_rows == 0)
                return null;
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return null;
    }

    public static function registerUser($email, $password, $nome, $cognome, $datanascita, $cf, $telefono) {
        $email = self::$connection->real_escape_string($email);
        $password = self::$connection->real_escape_string($password);
        $nome = self::$connection->real_escape_string($nome);
        $cognome = self::$connection->real_escape_string($cognome);
        $datanascita = self::$connection->real_escape_string($datanascita);
        $cf = self::$connection->real_escape_string($cf);
        $telefono = self::$connection->real_escape_string($telefono);
        $query = "INSERT INTO Utente (email, password, nome, cognome, dataDiNascita, CF, tel) VALUES (\"$email\", \"$password\", \"$nome\", \"$cognome\", \"$datanascita\", \"$cf\", \"$telefono\");";

        return self::insertUpdateDelete($query);

    }
/*
    public static function updateCorsi(){
        $query = "UPDATE nome,descrizione,durata,livello,costo,nomeImg FROM Corsi";
        return self::selectRows($query);
    }
    */
    public static function selectCourses() {
        $query = "SELECT nome, descrizione, durata, livello, costo, nomeImg FROM Corsi";
        return self::selectRows($query);
    }
    public static function selectTrainers() {
        $query = "SELECT idAllenatore, nome, cognome, email,img FROM Allenatore";
        return self::selectRows($query);
    }
    public static function selectPrices() {
    $query = "SELECT  tipoAbbonamento, prezzo, descrizione, nomeImg FROM Abbonamento";
    return self::selectRows($query);
    }

    public static function getAdmin($email, $password) {
         $email = self::$connection->real_escape_string($email);
        $password = self::$connection->real_escape_string($password);
    $query = "SELECT  email, password FROM Admin WHERE email=\"$email\" AND password=\"$password\"";
    return self::selectRows($query);
    }
        public static function getUser($email, $password) {
         $email = self::$connection->real_escape_string($email);
        $password = self::$connection->real_escape_string($password);
    $query = "SELECT  email, password FROM Utente WHERE email=\"$email\" AND password=\"$password\"";
    return self::selectRows($query);
    }
    //genera orario
    public static function CorsoGiornoOra($giorno, $oraInizio){
        $query= "SELECT Corsi.nome AS Corso, TIME_FORMAT(oraI, '%H:%i') AS oraI, TIME_FORMAT(oraF, '%H:%i') AS oraF, Allenatore.nome AS Allenatore, stanza, giorno
                FROM Orario, Corsi, Allenatore
                WHERE Orario.idCorso=Corsi.idCorso AND Orario.idAllenatore=Allenatore.idAllenatore
                AND oraI LIKE '".$oraInizio.":%%:%%' AND giorno='".$giorno."';";
        return self::selectRows($query);
    }
    public static function corsiFasciaOraria($oraInizio){
        $query= "SELECT idCorso
                FROM Orario
                WHERE oraI LIKE '".$oraInizio.":%%:%%';";
        return self::selectRows($query);
    }
    public static function corsiGiornata($giorno){
        $query= "SELECT idCorso
                FROM Orario
                WHERE giorno='".$giorno."';";
        return self::selectRows($query);
    }

     public static function listaCorsi(){
        $query= "SELECT idCorso,nome
                FROM Corsi";
        return self::selectRows($query);
    }
    public static function getIdCorso($nomeCorso){
        $query= "SELECT idCorso
                FROM Corsi
                WHERE nome='".$nomeCorso."';";
        return self::selectRows($query);
    }
}
