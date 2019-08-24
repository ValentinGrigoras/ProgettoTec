
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
		//controllo  mail
		if ($_POST['email']==""){
			$error=true;
			$page=str_replace('<p class="hidden">*erroremail*</p>', '<p class="error">Inserire l\' <span xml:lang=\"en\">Email</span>.</p>', $page);
		}else{
			if (!Validator::emailValidator($_POST['email'])){
				$error=true;
				$page=str_replace('<p class="hidden">*erroremail*</p>', '<p class="error">Il campo <span xml:lang=\"en\">Email</span> inserito non è corretto. Rispettare il formato indicato.</p>', $page);
			}
		}
		//controllo se mail è già registrata
		
		if (!error) {
			$user = Database::selectUser($_POST['email']);
			if (!empty($user)) {
				$error=true;
				$page=str_replace('<p class="hidden">*erroremail*</p>', '<p class=\'error\'>L\'<span xml:lang=\'en\'>email</span> &egrave; gi&agrave; registrata.</p>', $page);
			}
		} 
		//controllo password
		if ($_POST['password']==""){
			$error=true;
			$page=str_replace('<p class="hidden">*errorpassword*</p>', '<p class="error">Inserire una <span xml:lang=\"en\">password</span>.</p>', $page);
		}else{
			if (!Validator::passwordValidator($_POST['password'])){
				$error=true;
				$page=str_replace('<p class="hidden">*errorepassword*</p>', '<p class="error">La <span xml:lang=\"en\">password</span> non rispetta le indicazioni. Rispettare il formato indicato.</p>', $page);
			}
		}
		if ($_POST['password']!=$_POST['confermapassword']){
			$error=true;
			$page=str_replace('<p class="hidden">*errorconfermapassword*</p>', '<p class="error">La <span xml:lang=\"en\">password</span> non coincide.</p>', $page);
		}
		//controllo nome
		if ($_POST['nome']==""){
			$error=true;
			$page=str_replace('<p class="hidden">*errornome*</p>', '<p class="error">Inserisci il nome.</p>', $page);
		}else{
			if (!Validator::nameValidator($_POST['nome'])){
				$error=true;
				$page=str_replace('<p class="hidden">*errorenome*</p>', '<p class="error">Il nome inserito non &egrave; valido. Rispettare il formato indicato.</p>', $page);
			}
		}
		//controllo cognome
		if ($_POST['cognome']==""){
			$error=true;
			$page=str_replace('<p class="hidden">*errorcognome*</p>', '<p class="error">Inserisci il cognome.</p>', $page);
		}else{
			if (!Validator::nameValidator($_POST['cognome'])){
				$error=true;
				$page=str_replace('<p class="hidden">*errorcognome*</p>', '<p class="error">Il cognome inserito non &egrave; valido. Rispettare il formato indicato.</p>', $page);
			}
		}
		//controllo cf
		if ($_POST['cf']==""){
			$error=true;
			$page=str_replace('<p class="hidden">*errorcf*</p>', '<p class="error">Inserisci il codice fiscale.</p>', $page);
		}else{
			if (!Validator::cfValidator($_POST['cf'])){
				$error=true;
				$page=str_replace('<p class="hidden">*errorcf*</p>', '<p class="error">Il codice fiscale inserito non &egrave; valido. Rispettare il formato indicato.</p>', $page);
			}
		}
		//controllo nr. telefono
		if (($_POST['telefono'])!="" && !Validator::mobileValidator($_POST['telefono'])){
			$error=true;
			$page=str_replace('<p class="hidden">*errortelefono*</p>', '<p class="error">Il numero di telefono inserito non &egrave; valido. Rispettare il formato indicato.</p>', $page);
		}
		//controllo data di nascita
		if ($_POST['datanascita']==""){
			$error=true;
			$page=str_replace('<p class="hidden">*errordatanascita*</p>', '<p class="error">Inserisci la data di nascita.</p>', $page);
		}else{
			$data= date('d-m-Y',strtotime($_POST['datanascita']));
			list($day, $month, $year)=explode('-',$data);
			if (!checkdate($month, $day, $year)){
				$error=true;
				$page=str_replace('<p class="hidden">*errordatanascita*</p>', '<p class="error">La data di nascita inserita non &egrave; valido. Rispettare il formato indicato.</p>', $page);
			}
		}
        if (!$errore){
            $registeruser = Database::registerUser($_POST['email'], $_POST['password'], $_POST['nome'], $_POST['cognome'], date("Y-m-d", strtotime($data)), $_POST['cf'], $_POST['telefono']);
            if (isset($registeruser) && $registeruser){
                $user = Database::selectUser($_POST['email']);
            	if (isset($user)) {
                    /*$m = "<div class=\"confirm\"> <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">OK</span> <p> L\'account &egrave; stato creato. <p> </div>";
					$page=str_replace('*confirmmessage*', $m, $page);*/
    			}
			}
        }
          
	}
	echo $page;
}
?>
