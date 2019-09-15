
<?php 
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
require_once "./../../php/database/database.php";
require_once "./../../php/tools/validator.php";

use Database\Database;
use Validator\Validator;

$database = new Database();
if ($database) {
$page = file_get_contents(dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "html" . DIRECTORY_SEPARATOR . "pagine" . DIRECTORY_SEPARATOR . "home.html");


//ALLENATORI

$page = str_replace("*tabindextitoloallenatori*", $tabindex, $page, $counter);
if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);

$trainers = Database::selectTrainers();
if(isset($trainers))
{
$trainer = "";
  for($indice = 0;$indice<6; $indice++){

    $trainer .= '<dl class="threeColumnsCard">';
    $trainer .= '<dt tabindex="'.$tabindex.'">'.$trainers[$indice]['cognome']. " ".$trainers[$indice]['nome']. '</dt>';
    $tabindex++;
	$trainer .= '<dd class="cont_corso">';
    $trainer .= '<img class= "allenatoreImg" src="img/allenatori/'.$trainers[$indice]['img']. '"' . ' alt="foto allenatore ' .$trainers[$indice]['cognome']. " ".$trainers[$indice]['nome']. '"/>';
	$trainer .= '<a class="contactTrainer trainers" href="mailto:' . $trainers[$indice]['email'] .' tabindex="'.$tabindex.'">'. $trainers[$indice]['email'] .'</a>';
    $tabindex++;
	$trainer .=  '</dd>';
    $trainer .= '</dl>';


  }$page = str_replace("*allenatoriHome*", $trainer, $page);
//CORSI
  $courses = Database::selectCourses();

if(isset($courses))

$page = str_replace("*tabindextitolocorsi*", $tabindex, $page, $counter);
if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);

$course = "";
  for($indice = 0;$indice<6; $indice++){

    $course .= '<dl class="threeColumnsCard">';
    $course .= '<dt tabindex="'.$tabindex.'">'.$courses[$indice]['nome'].'</dt>';
	$tabindex++;
    $course .= '<dd class="cont_corso">';
    $course .= '<img class = "corsiImg" src="img/corsi/'.$courses[$indice]['nomeImg']. '"' . ' alt="immagine corso' . $courses[$indice]['nome'] . '"/>';
	$course .= '<p class="livello_corso" tabindex="'.$tabindex.'">Livello: ' . $courses[$indice]['livello'] .'</p>';
    $tabindex++;
	$course .= '<p class="livello_corso" tabindex="'.$tabindex.'">Durata sessione: ' . $courses[$indice]['durata'] . ' min'.'</p>';
    $tabindex++;
	$course .= '<p class="livello_corso" tabindex="'.$tabindex.'">Costo al mese : ' . $courses[$indice]['costo'] . ' &euro;' . '</p>';
    $tabindex++;
	$course .= '<p class="desc_corso" tabindex="'.$tabindex.'">' . $courses[$indice]['descrizione'] . '</p>';
    $tabindex++;
	$course .=  '</dd>';
    $course .= '</dl>';


  } $page = str_replace("*corsiHome*", $course, $page);
}

$page = str_replace("*tabindextitolocontattaci*", $tabindex, $page, $counter);
if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);


$page = str_replace("*tabindextitoloobbligatori*", $tabindex, $page, $counter);
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
	$page = str_replace("*tabindexnome*", $tabindex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
	if ($nome==""){
		$error=true; 
		$page=str_replace('*errornome*', '<p tabindex="'.$tabindex.'" class="error">Inserisci il nome.</p>', $page);
		$tabindex++;
	}else{
		if (!Validator::nameValidator($nome)){
			$error=true;
			$page=str_replace('*errornome*', '<p tabindex="'.$tabindex.'" class="error">Nome non valido. Sono accettate solo lettere.</p>', $page);
			$tabindex++;
		}
	}
	$page = str_replace("*tabindexcognome*", $tabindex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);	
	//controllo cognome
	if ($cognome==""){
		$error=true; 
		$page=str_replace('*errorcognome*', '<p tabindex="'.$tabindex.'" class="error">Inserisci il cognome.</p>', $page);
		$tabindex++;
	}else{
		if (!Validator::nameValidator($cognome)){
			$error=true; 
			$page=str_replace('*errorcognome*', '<p tabindex="'.$tabindex.'" class="error">Cognome non valido. Sono accettate solo lettere.</p>', $page);
			$tabindex++;
		}
	}
	$page = str_replace("*tabindexfieldemail*", $tabindex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
	if ($email==""){
		$error=true; 
		$page=str_replace('*erroremail*', '<p tabindex="'.$tabindex.'" class="error">Inserire l\' <span xml:lang=\"en\">email</span>.</p>', $page);
		$tabindex++;
	}else{
		if (!Validator::emailValidator($email)){
			$error=true; 
			$page=str_replace('*erroremail*', '<p tabindex="'.$tabindex.'" class="error">Il campo <span xml:lang=\"en\">email</span> inserito non è corretto. Rispettare il formato indicato.</p>', $page);
			$tabindex++;
		}
	}	
	$page = str_replace("*tabindexsubject*", $tabindex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
	if ($messaggio==""){
		$error=true; 
		$page=str_replace('*errormessaggio*', '<p tabindex="'.$tabindex.'" class="error">Inserisci un messaggio!</p>', $page);
		$tabindex++;
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
	$page = str_replace("*tabindexinvia*", $tabindex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
	
	
$page=str_replace('*erroremail*', "", $page);
$page=str_replace('*errornome*', "" , $page);
$page=str_replace('*errorcognome*', "", $page);
$page=str_replace('*errormessaggio*', "", $page);
$page=str_replace('*confirmmessage*', "", $page);
//// End contact form
}
;
	$page = str_replace("*tabindextitoloinfo*", $tabindex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
	
	$page = str_replace("*tabindextitolocomecon*", $tabindex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
	
	$page = str_replace("*tabindextitolounisciti*", $tabindex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
	
	$page = str_replace("*tabindextitoloallenatori*", $tabindex, $page, $counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
	
$page = str_replace("*linkabbonamenti*",'<a tabindex="'.$tabindex.'" class="btn" href="./prezzi">Scopri i nostri abbonamenti</a>',$page);
$tabIndex++;
echo $page;
?>
