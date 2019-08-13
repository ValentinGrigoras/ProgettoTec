
<?php 

require_once "./../../php/database/database.php";
require_once "./../../php/tools/validator.php";

use Database\Database;
use Validator\Validator;

$database = new Database();

if ($database) {
	$page = file_get_contents(dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "html" . DIRECTORY_SEPARATOR . "pagine" . DIRECTORY_SEPARATOR . "login.html");
	
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
