<?php
require_once "./../database/database.php";

use Database\Database;
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }



//mi collego
$database = new Database();

if($database && isset($_POST['signin'])) {
		$ris = Database::getUser($_POST['email'],$_POST['password']);
		/*Prelevo l'identificativo dell'utente */
		$cod=$ris[0]['email'];
		$id =$ris[0]['idUtente'];

		/* Effettuo il controllo */
		if ($cod == NULL) $trovato = 0 ;
		else $trovato = 1;  

		/* Username e password corrette */
		if($trovato === 1) {

		  $_SESSION["autorizzato"] = 1;

		  /*Registro il codice dell'utente*/
		  $_SESSION['cod'] = $cod;
		  $_SESSION['id'] = $id;

		$_SESSION['error'] = 0;
		 /*Redirect alla pagina riservata*/
		   //echo '<script language=javascript>document.location.href="panel_user.php"</script>';
		   header("Location: ../../user_panel");

		   //return true
		} else {
			
		$_SESSION['error'] = 1;
		/*Username e password errati, redirect alla pagina di login*/
		 //echo '<script language=javascript>document.location.href="ProgettoTec"</script>';
		header("Location: ../../login");
		 //return false
		}
	}

?>
