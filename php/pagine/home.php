
<?php 
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
require_once "./../../php/database/database.php";
require_once "./../../php/tools/validator.php";
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . "templates" . DIRECTORY_SEPARATOR . "utilities.php";

use Utilities\Utilities;
use Database\Database;
use Validator\Validator;

$database = new Database();
if ($database) {
$page = file_get_contents(dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "html" . DIRECTORY_SEPARATOR . "pagine" . DIRECTORY_SEPARATOR . "home.html");


//ALLENATORI

$trainers = Database::selectTrainers();
if(isset($trainers))
{
$trainer = "";
  for($indice = 0;$indice<6; $indice++){

    $trainer .= '<dl class="threeColumnsCard">';
    $trainer .= '<dt>'.$trainers[$indice]['cognome']. " ".$trainers[$indice]['nome']. '</dt>';
	$trainer .= '<dd class="cont_corso">';
    $trainer .= '<img class= "allenatoreImg" src="img/allenatori/'.$trainers[$indice]['img']. '"' . ' alt="foto allenatore ' .$trainers[$indice]['cognome']. " ".$trainers[$indice]['nome']. '"/>';
	$trainer .= '<a class="contactTrainer trainers" href="mailto:' . $trainers[$indice]['email'] .'">'. $trainers[$indice]['email'] .'</a>';

	$trainer .=  '</dd>';
    $trainer .= '</dl>';


  }$page = str_replace("*allenatoriHome*", $trainer, $page);
//CORSI
  $courses = Database::selectCourses();

if(isset($courses))
$course = "";
  for($indice = 0;$indice<6; $indice++){

    $course .= '<dl class="threeColumnsCard">';
    $course .= '<dt>'.$courses[$indice]['nome'].'</dt>';
    $course .= '<dd class="cont_corso">';
    $course .= '<img class = "corsiImg" src="img/corsi/'.$courses[$indice]['nomeImg']. '"' . ' alt="immagine corso' . $courses[$indice]['nome'] . '"/>';
	$course .= '<p class="livello_corso">Livello: ' . $courses[$indice]['livello'] .'</p>';
	$course .= '<p class="livello_corso">Durata sessione: ' . $courses[$indice]['durata'] . ' min'.'</p>';
	$course .= '<p class="livello_corso">Costo al mese : ' . $courses[$indice]['costo'] . ' &euro;' . '</p>';
	$course .= '<p class="desc_corso" >' . $courses[$indice]['descrizione'] . '</p>';
	$course .=  '</dd>';
    $course .= '</dl>';


  } $page = str_replace("*corsiHome*", $course, $page);
}

// Contact form
if (!isset($_POST['contact_us'])) {//non è stato fatto submit
	$page=str_replace('*email*', "" , $page);
	$page=str_replace('*nome*', "" , $page);
	$page=str_replace('*cognome*', "" , $page);
	$page=str_replace('*messaggio*', "" , $page);
	$page = str_replace("*tabindexnome*", $tabIndex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
	$page = str_replace("*tabindexcognome*", $tabIndex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
	$page = str_replace("*tabindexfieldemail*", $tabIndex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
	$page = str_replace("*tabindexsubject*", $tabIndex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
	$page = str_replace("*tabindexinvia*", $tabIndex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
}else{//è stato fatto submit
	$error=false;
	$nome=$_POST['nome']; 
	$cognome=$_POST['cognome']; 
	$email=$_POST['email']; 
	$messaggio=$_POST['messaggio']; 
		
	//controllo nome
	if ($nome==""){
		$error=true; 
		$page=str_replace('*errornome*', '<p class="error">Inserisci il nome.</p>', $page);
	}else{
		if (!Validator::nameValidator($nome)){
			$error=true;
			$page=str_replace('*errornome*', '<p class="error">Nome non valido. Sono accettate solo lettere.</p>', $page);
			
		}
	}
	//controllo cognome
	if ($cognome==""){
		$error=true; 
		$page=str_replace('*errorcognome*', '<p class="error">Inserisci il cognome.</p>', $page);
	}else{
		if (!Validator::nameValidator($cognome)){
			$error=true; 
			$page=str_replace('*errorcognome*', '<p class="error">Cognome non valido. Sono accettate solo lettere.</p>', $page);
			
		}
	}
	if ($email==""){
		$error=true; 
		$page=str_replace('*erroremail*', '<p class="error">Inserire l\' <span xml:lang=\"en\">email</span>.</p>', $page);
		
	}else{
		if (!Validator::emailValidator($email)){
			$error=true; 
			$page=str_replace('*erroremail*', '<p class="error">Il campo <span xml:lang=\"en\">email</span> inserito non è corretto. Rispettare il formato indicato.</p>', $page);
			
		}
	}	
	if ($messaggio==""){
		$error=true; 
		$page=str_replace('*errormessaggio*', '<p class="error">Inserisci un messaggio!</p>', $page);
	}
	if (!$error){
        $from="From: $nome<$email>\r\nReturn-path: $email";
        $to_email="info@aimfit.com";
        $subject="Message sent using your contact form";
        if ( mail($to_email, $subject, $messaggio, $from)) {
      			$page=str_replace('*confirmmessagge*', "<p><span xml:lang=\"en\">Email</span> inviata!</p>", $page);
      			$page=str_replace('*email*', "" , $page);
				$page=str_replace('*nome*', "" , $page);
				$page=str_replace('*cognome*', "" , $page);
				$page=str_replace('*messaggio*', "" , $page);
  		} else {
  		 		$page=str_replace('*confirmmessagge*', "<p class=\"error\"><span xml:lang=\"en\">Email</span> non inviata! Ti preghiamo di riprovare.</p>", $page);
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
	
$page=str_replace('*erroremail*', "", $page);
$page=str_replace('*errornome*', "" , $page);
$page=str_replace('*errorcognome*', "", $page);
$page=str_replace('*errormessaggio*', "", $page);
$page=str_replace('*confirmmessage*', "", $page);
//// End contact form
}

$page = str_replace("*linkabbonamenti*",'<a class="btn" href="./prezzi">Scopri i nostri abbonamenti</a>',$page);
echo $page;
?>
