<?php
require_once "./../database/database.php";

use Database\Database;
session_start(); //inizio la sessione
//includo i file necessari a collegarmi al db con relativo script di accesso


//mi collego
$db = new Database();
$checkAdmin = $_POST['admin'];
if(isset($checkAdmin) && $db && $_SERVER["REQUEST_METHOD"] == "POST"){

echo "sono dentro";
		$ris = Database::getAdmin($_POST['email'],$_POST['password']);
		$riga=mysqli_fetch_array($ris);  

		/*Prelevo l'identificativo dell'utente */
		$cod=$riga['email'];

		/* Effettuo il controllo */
		if ($cod == NULL) $trovato = 0 ;
		else $trovato = 1;  

		/* Username e password corrette */
		if($trovato === 1) {

		 /*Registro la sessione*/
		  session_register('autorizzato');

		  $_SESSION["autorizzato"] = 1;

		  /*Registro il codice dell'utente*/
		  $_SESSION['cod'] = $cod;

		 /*Redirect alla pagina riservata*/
		   echo '<script language=javascript>document.location.href="panel_user.php"</script>'; 
		   //return true
		} else {

		/*Username e password errati, redirect alla pagina di login*/
		 echo '<script language=javascript>document.location.href="ProgettoTec"</script>';
		 //return false
		}
	}
?>