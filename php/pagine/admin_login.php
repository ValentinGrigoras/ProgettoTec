
<?php 

require_once "./../../php/database/database.php";
require_once "./../../php/tools/validator.php";

use Database\Database;
use Validator\Validator;

$database = new Database();

if ($database) {
	$page = file_get_contents(dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "html" . DIRECTORY_SEPARATOR . "pagine" . DIRECTORY_SEPARATOR . "admin_login.html");
	
	if (isset($_POST['signup'])) {
		$error=false;
		if (!Validator::emailValidator($_POST['email'])){
			$error=true;
			$page=str_replace('*erroremail*', 'Il campo <span xml:lang=\"en\">Email</span> inserito non è corretto. Rispettare il formato indicato.', $page);
		}
		$user = Database::selectUser($_POST['email']);
		if (empty($user)) {
			if (!Validator::passwordValidator($_POST['password'])){
				$error=true;
				$page=str_replace('*errorepassword*', "La password non rispetta le indicazioni. Rispettare il formato indicato.", $page);
			}
			if (!Validator::nameValidator($_POST['nome'])){
				$error=true;
				$page=str_replace('*errorenome*', "Il nome inserito non &egrave; valido. Rispettare il formato indicato.", $page);
			}
			if (!Validator::nameValidator($_POST['cognome'])){
				$error=true;
				$page=str_replace('*errorecognome*', "Il cognome inserito non &egrave; valido. Rispettare il formato indicato.", $page);
			}
			if (!Validator::cfValidator($_POST['cf'])){
				$error=true;
				$page=str_replace('*errorecf*', "Il codice fiscale inserito non &egrave; valido. Rispettare il formato indicato.", $page);
			}
			if (!Validator::mobileValidator($_POST['telefono'])){
				$error=true;
				$page=str_replace('*erroretelefono*', "Il numero di telefono inserito non &egrave; valido. Rispettare il formato indicato.", $page);
			}
			$data= date('Y-m-d',strtotime($_POST['datanascita']));
			if (!Validator::dateValidator($data)){
				$error=true;
				$page=str_replace('*erroredatanascita*', "La data di nascita inserita non &egrave; valido. Rispettare il formato indicato.", $page);
			}
            if (!$errore){
            	$registeruser = Database::registerUser($_POST['email'], $_POST['password'], $_POST['nome'], $_POST['cognome'], $data, $_POST['cf'], $_POST['telefono']);
            	if (isset($registeruser) && $registeruser){
                	$user = Database::selectUser($_POST['email']);
            		if (isset($user)) {
                	/*$m = "<div class=\"confirm\"> <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">OK</span> <p> L\'account &egrave; stato creato. <p> </div>";
					$page=str_replace('*confirmmessage*', $m, $page);*/
    				}
				}
            }
        }  
	}
	echo $page;
}
?>
