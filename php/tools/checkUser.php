<?php


//variabili POST con anti sql Injection
$username=$_POST['email']; //faccio l'escape dei caratteri dannosi
$password=$_POST['password']; //sha1 cifra la password anche qui in questo modo corrisponde con quella del db
var_dump($username);
var_dump($password);

/
?>