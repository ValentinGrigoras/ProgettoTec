
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
		
		if (!$error) {
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
				$page=str_replace('<p class="hidden">*errorpassword*</p>', '<p class="error">La <span xml:lang=\"en\">password</span> non rispetta le indicazioni. Rispettare il formato indicato.</p>', $page);
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
				$page=str_replace('<p class="hidden">*errornome*</p>', '<p class="error">Il nome inserito non &egrave; valido. Rispettare il formato indicato.</p>', $page);
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
		if ($_POST['anno']=="" || $_POST['mese']=="" || $_POST['giorno']==""){
			$error=true;
			$page=str_replace('<p class="hidden">*errordatanascita*</p>', '<p class="error">Inserisci la data di nascita.</p>', $page);
		}else{
			if (!checkdate((int)$_POST['mese'], (int)$_POST['giorno'], (int)$_POST['anno'])){
				$error=true;
				$page=str_replace('<p class="hidden">*errordatanascita*</p>', '<p class="error">La data di nascita inserita non &egrave; valido. Rispettare il formato indicato.</p>', $page);
			}
		}
        if (!$errore){
        	$date=$_POST['anno'].$_POST['mese'].$_POST['giorno'];
            $registeruser = Database::registerUser($_POST['email'], $_POST['password'], $_POST['nome'], $_POST['cognome'], Date($date), $_POST['cf'], $_POST['telefono']);
            if (isset($registeruser) && $registeruser){
                $user = Database::selectUser($_POST['email']);
            	if (isset($user)) {
                    $page="<h1> Fantastico! </h1> <p>Il tuo acount &egrave; stato creato! </p> <a href='./user_panel' tabindex='2'>Vai alla tua area personale.</a>";
    			}
			}else{
				$page=str_replace('<h1> Unisciti a AIMFit </h1>
			<p> Offre soluzioni d’allenamento in grado di rispondere ad ogni esigenza! </p>', '<h1 class="red_error"> C\'&egrave; stato un errore!', $page);
				$page=str_replace('*email*', $_POST['email'] , $page);
				$page=str_replace('*password*', $_POST['password'] , $page);
				$page=str_replace('*confermapassword*', $_POST['confermapassword'] , $page);
				$page=str_replace('*nome*', $_POST['nome'] , $page);
				$page=str_replace('*cognome*', $_POST['cognome'] , $page);
				$page=str_replace('*giorno*', $_POST['giorno'] , $page);
				$page=str_replace('*mese*', $_POST['mese'] , $page);
				$page=str_replace('*anno*', $_POST['anno'] , $page);
				$page=str_replace('*cf*', $_POST['cf'] , $page);
				$page=str_replace('*telefono*', $_POST['telefono'] , $page);
			}
        }
          

	}
	$page=str_replace('*email*', "" , $page);
	$page=str_replace('*password*', "" , $page);
	$page=str_replace('*confermapassword*', "" , $page);
	$page=str_replace('*nome*', "" , $page);
	$page=str_replace('*cognome*', "" , $page);
	$page=str_replace('*giorno*', "" , $page);
	$page=str_replace('*mese*', "" , $page);
	$page=str_replace('*anno*', "" , $page);
	$page=str_replace('*cf*', "" , $page);
	$page=str_replace('*telefono*', "" , $page);
	echo $page;
}
?>
