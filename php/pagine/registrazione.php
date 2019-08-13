
<?php 

require_once "./../../php/database/database.php";
require_once "./../../php/tools/validator.php";

use Database\Database;
use Validator\Validator;

$database = new Database();

if ($database) {
	$page = file_get_contents(dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "html" . DIRECTORY_SEPARATOR . "pagine" . DIRECTORY_SEPARATOR . "registrazione.html");
	
	if (isset($_POST['signup'])) {
		$error=false;
		if (!Validator::emailValidator($_POST['email'])){
			$error=true;
			$page=str_replace('<p class="hidden">*erroremail*</p>', '<p class="error">Il campo <span xml:lang=\"en\">Email</span> inserito non è corretto. Rispettare il formato indicato.</p>', $page);
		}
		$user = Database::selectUser($_POST['email']);
		if (empty($user)) {
			if (!Validator::passwordValidator($_POST['password'])){
				$error=true;
				$page=str_replace('<p class="hidden">*errorepassword*</p>', '<p class="error">La <span xml:lang=\"en\">password</span> non rispetta le indicazioni. Rispettare il formato indicato.</p>', $page);
			}
			if (!Validator::nameValidator($_POST['nome'])){
				$error=true;
				$page=str_replace('<p class="hidden">*errorenome*</p>', '<p class="error">Il nome inserito non &egrave; valido. Rispettare il formato indicato.</p>', $page);
			}
			if (!Validator::nameValidator($_POST['cognome'])){
				$error=true;
				$page=str_replace('<p class="hidden">*errorecognome*</p>', '<p class="error">Il cognome inserito non &egrave; valido. Rispettare il formato indicato.</p>', $page);
			}
			if (!Validator::cfValidator($_POST['cf'])){
				$error=true;
				$page=str_replace('<p class="hidden">*errorecf*</p>', '<p class="error">Il codice fiscale inserito non &egrave; valido. Rispettare il formato indicato.</p>', $page);
			}
			if (!Validator::mobileValidator($_POST['telefono'])){
				$error=true;
				$page=str_replace('<p class="hidden">*erroretelefono*</p>', '<p class="error">Il numero di telefono inserito non &egrave; valido. Rispettare il formato indicato.</p>', $page);
			}
			$data= date('Y-m-d',strtotime($_POST['datanascita']));
			if (!Validator::dateValidator($data)){
				$error=true;
				$page=str_replace('<p class="hidden">*erroredatanascita*</p>', '<p class="error">La data di nascita inserita non &egrave; valido. Rispettare il formato indicato.</p>', $page);
			}
            if (!$errore){
            	$registeruser = Database::registerUser($_POST['email'], $_POST['password'], $_POST['nome'], $_POST['cognome'], $data, $_POST['cf'], $_POST['telefono']);
            	if (isset($registeruser) && $registeruser){
                	$user = Database::selectUser($_POST['email']);
            		if (isset($user)) {
                	$m = "<div class=\"confirm\"> <p> L'account &egrave; stato creato. <p> 
                	<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">OK</span> </div>";
					$page=str_replace('*confirmmessage*', $m, $page);
    				}
				}
            }
        }  
	}
	echo $page;
}
?>
