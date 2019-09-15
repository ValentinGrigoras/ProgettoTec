
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

$page = str_replace("*tabindextitoloallenatori*", $tabIndex, $page, $counter);
if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);

$trainers = Database::selectTrainers();
if(isset($trainers))
{
$trainer = "";
  for($indice = 0;$indice<6; $indice++){

    $trainer .= '<dl class="threeColumnsCard">';
    $trainer .= '<dt tabindex="'.$tabIndex.'">'.$trainers[$indice]['cognome']. " ".$trainers[$indice]['nome']. '</dt>';
    $tabIndex++;
	$trainer .= '<dd class="cont_corso">';
    $trainer .= '<img class= "allenatoreImg" src="img/allenatori/'.$trainers[$indice]['img']. '"' . ' alt="foto allenatore ' .$trainers[$indice]['cognome']. " ".$trainers[$indice]['nome']. '"/>';
	$trainer .= '<a class="contactTrainer trainers" href="mailto:' . $trainers[$indice]['email'] .' tabindex="'.$tabIndex.'">'. $trainers[$indice]['email'] .'</a>';
    $tabIndex++;
	$trainer .=  '</dd>';
    $trainer .= '</dl>';


  }$page = str_replace("*allenatoriHome*", $trainer, $page);
//CORSI
  $courses = Database::selectCourses();

if(isset($courses))

$page = str_replace("*tabindextitolocorsi*", $tabIndex, $page, $counter);
if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);

$course = "";
  for($indice = 0;$indice<6; $indice++){

    $course .= '<dl class="threeColumnsCard">';
    $course .= '<dt tabindex="'.$tabIndex.'">'.$courses[$indice]['nome'].'</dt>';
	$tabIndex++;
    $course .= '<dd class="cont_corso">';
    $course .= '<img class = "corsiImg" src="img/corsi/'.$courses[$indice]['nomeImg']. '"' . ' alt="immagine corso' . $courses[$indice]['nome'] . '"/>';
	$course .= '<p class="livello_corso" tabindex="'.$tabIndex.'">Livello: ' . $courses[$indice]['livello'] .'</p>';
    $tabIndex++;
	$course .= '<p class="livello_corso" tabindex="'.$tabIndex.'">Durata sessione: ' . $courses[$indice]['durata'] . ' min'.'</p>';
    $tabIndex++;
	$course .= '<p class="livello_corso" tabindex="'.$tabIndex.'">Costo al mese : ' . $courses[$indice]['costo'] . ' &euro;' . '</p>';
    $tabIndex++;
	$course .= '<p class="desc_corso" tabindex="'.$tabIndex.'">' . $courses[$indice]['descrizione'] . '</p>';
    $tabIndex++;
	$course .=  '</dd>';
    $course .= '</dl>';


  } $page = str_replace("*corsiHome*", $course, $page);
}

$page = str_replace("*tabindextitolocontattaci*", $tabIndex, $page, $counter);
if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);


$page = str_replace("*tabindextitoloobbligatori*", $tabIndex, $page, $counter);
if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);

// Contact form
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
		
	//controllo nome
	$page = str_replace("*tabindexnome*", $tabIndex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
	if ($nome==""){
		$error=true; 
		$page=str_replace('*errornome*', '<p tabindex="'.$tabIndex.'" class="error">Inserisci il nome.</p>', $page);
		$tabIndex++;
	}else{
		if (!Validator::nameValidator($nome)){
			$error=true;
			$page=str_replace('*errornome*', '<p tabindex="'.$tabIndex.'" class="error">Nome non valido. Sono accettate solo lettere.</p>', $page);
			$tabIndex++;
		}
	}
	$page = str_replace("*tabindexcognome*", $tabIndex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);	
	//controllo cognome
	if ($cognome==""){
		$error=true; 
		$page=str_replace('*errorcognome*', '<p tabindex="'.$tabIndex.'" class="error">Inserisci il cognome.</p>', $page);
		$tabIndex++;
	}else{
		if (!Validator::nameValidator($cognome)){
			$error=true; 
			$page=str_replace('*errorcognome*', '<p tabindex="'.$tabIndex.'" class="error">Cognome non valido. Sono accettate solo lettere.</p>', $page);
			$tabindex++;
		}
	}
	$page = str_replace("*tabindexfieldemail*", $tabIndex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
	if ($email==""){
		$error=true; 
		$page=str_replace('*erroremail*', '<p tabindex="'.$tabIndex.'" class="error">Inserire l\' <span xml:lang=\"en\">email</span>.</p>', $page);
		$tabIndex++;
	}else{
		if (!Validator::emailValidator($email)){
			$error=true; 
			$page=str_replace('*erroremail*', '<p tabindex="'.$tabIndex.'" class="error">Il campo <span xml:lang=\"en\">email</span> inserito non è corretto. Rispettare il formato indicato.</p>', $page);
			$tabIndex++;
		}
	}	
	$page = str_replace("*tabindexsubject*", $tabIndex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
	if ($messaggio==""){
		$error=true; 
		$page=str_replace('*errormessaggio*', '<p tabindex="'.$tabIndex.'" class="error">Inserisci un messaggio!</p>', $page);
		$tabIndex++;
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
	$page = str_replace("*tabindexinvia*", $tabIndex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
	
	
$page=str_replace('*erroremail*', "", $page);
$page=str_replace('*errornome*', "" , $page);
$page=str_replace('*errorcognome*', "", $page);
$page=str_replace('*errormessaggio*', "", $page);
$page=str_replace('*confirmmessage*', "", $page);
//// End contact form
}
;
	$page = str_replace("*tabindextitoloinfo*", $tabIndex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
	
	$page = str_replace("*tabindextitolocomecon*", $tabIndex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
	
	$page = str_replace("*tabindextitolounisciti*", $tabIndex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
	
	$page = str_replace("*tabindextitoloallenatori*", $tabIndex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
	
$page = str_replace("*linkabbonamenti*",'<a tabindex="'.$tabIndex.'" class="btn" href="./prezzi">Scopri i nostri abbonamenti</a>',$page);
$tabIndex++;
echo $page;
?>
