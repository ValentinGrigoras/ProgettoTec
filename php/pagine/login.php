
<?php 
session_start();
require_once "./../../php/database/database.php";
require_once "./../../php/tools/validator.php";

use Database\Database;
use Validator\Validator;

$database = new Database();

$page = file_get_contents(dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "html" . DIRECTORY_SEPARATOR . "pagine" . DIRECTORY_SEPARATOR . "login.html");
var_dump($database);
if ($database) {
	echo "Sono 4";
	if (isset($_POST['signin'])) {
		$error=false;
echo "Sono 5";
		if (!Validator::emailValidator($_POST['email'])){
			$error=true;
			$page=str_replace('<p class="hidden">*erroremail*</p>', '<p class="error">Il campo <span xml:lang=\"en\">Email</span> inserito non è corretto. Rispettare il formato indicato.</p>', $page);
		}
		
        if(!$error){
        	echo "sono 6";
				
				var_dump($_POST['email']);
				$ris = Database::getUser($_POST['email'],$_POST['password']);
				var_dump($ris);
				/*Prelevo l'identificativo dell'utente */
				$cod=$ris[0]['email'];
				var_dump($cod);
				if ($cod == NULL) $trovato = 0 ;
					else $trovato = 1;  
					/* Username e password corrette */
				var_dump($trovato);
				if($trovato === 1) {
echo "sono 7";
			 
			  		$_SESSION["autorizzato"] = 1;

			  		/*Registro il codice dell'utente*/
			  		$_SESSION['cod'] = $cod;
			  		echo"setttato!!";
			  		$page = str_replace("*ciao*", "class=\"hidden\"", $page);
			  		$page.= "testo sei stato loggato";
				}
        	
        
		}
	}
	echo $page;

}
echo "sono 8";
//header("Location: ");
//die();


?>
