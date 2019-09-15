
<?php 

 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
require_once "./../../php/database/database.php";

use Database\Database;

$database = new Database();

$page = file_get_contents(dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "html" . DIRECTORY_SEPARATOR . "pagine" . DIRECTORY_SEPARATOR . "login.html");
if ($database) {

	if (isset($_SESSION['error']) && $_SESSION['error'] == 1) 
		$page = str_replace("*errorlogin*", "<h2 class=\"error\"> Autenticazione fallita!</h2> <p class=\"error\"> <span xml:lang=\"en\">Email</span> e/o <span xml:lang=\"en\">password</span> sono sbagliate!</p>", $page);
        else if(isset($_SESSION['error']) && $_SESSION['error'] == 0){
				
				/*Prelevo l'identificativo dell'utente */
				$cod=$ris[0]['email'];
				if ($cod == NULL) $trovato = 0 ;
					else $trovato = 1;  
					/* Username e password corrette */
				if($trovato === 1) {			 
			  		$_SESSION["autorizzato"] = 1;
			  		/*Registro il codice dell'utente*/
			  		$_SESSION['cod'] = $cod;
			  		$page = str_replace("*class*", "class=\"hidden\"", $page);
					  $page.= "<h1> Sei stato autenticato! </h1>";
					
				}


		else if (isset($_SESSION["autorizzato"]) &&  $_SESSION["autorizzato"]==1){
			$page = str_replace("*class*", "class=\"hidden\"", $page);
			$page.= "<h1> Sei già autenticato nel sistema! </h1>";

		}
	}        	
}
$page = str_replace("*errorlogin*", "", $page);

echo $page;
?>
