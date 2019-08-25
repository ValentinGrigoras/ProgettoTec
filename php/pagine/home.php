
<?php 

require_once "./../../php/tools/validator.php";
use Validator\Validator;


$page = file_get_contents(dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "html" . DIRECTORY_SEPARATOR . "pagine" . DIRECTORY_SEPARATOR . "home.html");
$page = str_replace("*linkabbonamenti*","<a class='btn' href='./prezzi'>Scopri</a>",$home);

////
////
//// Contact form
if (!isset($_POST['contact_us'])) {//non è stato fatto submit
	$page=str_replace('*email*', "" , $page);
	$page=str_replace('*nome*', "" , $page);
	$page=str_replace('*cognome*', "" , $page);
	$page=str_replace('*messaggio*', "" , $page);
}else{//è stato fatto submit
	$error=false;
	$nome=$_POST['nome']; 
	$cognome=$_POST['cognome']; 
	$email=$_POST['email']; 
	$messaggio=$_POST['messaggio']; 
	if ($email==""){
		$error=true;
		$page=str_replace('<p class="hidden">*erroremail*</p>', '<p class="error">Inserire l\' <span xml:lang=\"en\">email</span>.</p>', $page);
	}else{
		if (!Validator::emailValidator($email)){
			$error=true;
			$page=str_replace('<p class="hidden">*erroremail*</p>', '<p class="error">Il campo <span xml:lang=\"en\">Email</span> inserito non è corretto. Rispettare il formato indicato.</p>', $page);
		}
	}		
	//controllo nome
	if ($nome==""){
		$error=true;
		$page=str_replace('<p class="hidden">*errornome*</p>', '<p class="error">Inserisci il nome.</p>', $page);
	}else{
		if (!Validator::nameValidator($nome)){
			$error=true;
			$page=str_replace('<p class="hidden">*errornome*</p>', '<p class="error">Nome non valido. Sono accettate solo lettere.</p>', $page);
		}
	}
	//controllo cognome
	if ($cognome==""){
		$error=true;
		$page=str_replace('<p class="hidden">*errorcognome*</p>', '<p class="error">Inserisci il cognome.</p>', $page);
	}else{
		if (!Validator::nameValidator($cognome)){
			$error=true;
			$page=str_replace('<p class="hidden">*errorcognome*</p>', '<p class="error">Cognome non valido. Sono accettate solo lettere.</p>', $page);
			}
	}
	if (!$error){
        $from="From: $nome<$email>\r\nReturn-path: $email";
        $to_email="irina_030@protonmail.com";
        $subject="Message sent using your contact form";
        if ( mail($to_email, $subject, $messaggio, $from)) {
      			$page=str_replace('<p class="hidden">*confirm_messagge*</p>', "Email successfully sent to $to_email", $page);
      			$page=str_replace('*email*', "" , $page);
				$page=str_replace('*nome*', "" , $page);
				$page=str_replace('*cognome*', "" , $page);
				$page=str_replace('*messaggio*', "" , $page);
  		} else {
  		 		$page=str_replace('<p class="hidden">*confirm_messagge*</p>', "Email sending failed", $page);
  		 		$page=str_replace('*email*', $email, $page);
				$page=str_replace('*nome*', $nome , $page);
				$page=str_replace('*cognome*', $cognome, $page);
				$page=str_replace('*messaggio*', $messaggio, $page);
   		}
    }else{
		$page=str_replace('*email*', $email, $page);
		$page=str_replace('*nome*', $nome , $page);
		$page=str_replace('*cognome*', $cognome, $page);
		$page=str_replace('*messaggio*', $messaggio, $page);
	}
} 
//// End contact form
////
//// 
echo $page;
?>
