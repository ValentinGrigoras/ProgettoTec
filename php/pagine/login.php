
<?php 
session_start();
require_once "./../../php/database/database.php";
require_once "./../../php/tools/validator.php";

use Database\Database;
use Validator\Validator;

$database = new Database();

$page = file_get_contents(dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "html" . DIRECTORY_SEPARATOR . "pagine" . DIRECTORY_SEPARATOR . "login.html");
	
if ($database) {
	
	if (isset($_POST['signin'])) {
		$error=false;

		if (!Validator::emailValidator($_POST['email'])){
			$error=true;
			$page=str_replace('<p class="hidden">*erroremail*</p>', '<p class="error">Il campo <span xml:lang=\"en\">Email</span> inserito non è corretto. Rispettare il formato indicato.</p>', $page);
		}
		
        if(!$error){
        	$checkAdmin = $_POST['admin'];
         	if(isset($checkAdmin)){
				
				echo "sono dentro";
				var_dump($_POST['email']);
				$ris = Database::getAdmin($_POST['email'],$_POST['password']);
				var_dump($ris);
				/*Prelevo l'identificativo dell'utente */
				$cod=$ris[0]['email'];
				var_dump($cod);
				if ($cod == NULL) $trovato = 0 ;
					else $trovato = 1;  
					/* Username e password corrette */
			
				if($trovato === 1) {

			 
			  		$_SESSION["autorizzato"] = 1;

			  		/*Registro il codice dell'utente*/
			  		$_SESSION['cod'] = $cod;
			  		echo"setttato!!";

				}
        	}
        	else{
        		echo "controlla utente"; 
        	}

        
		}
	}
	echo $page;

}
header("Location: ");
die();


?>
