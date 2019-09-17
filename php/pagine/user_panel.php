<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    require_once "./../database/database.php";
    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . "templates" . DIRECTORY_SEPARATOR . "utilities.php";

    use Utilities\Utilities;
	use Database\Database;
	$database = new Database();
	//$header = file_get_contents(dirname(dirname(__DIR__)).'/'."html".'/'."templates".'/'."user_panel_header.html");

		$page = file_get_contents(dirname(dirname(__DIR__)).'/'."html".'/'."pagine".'/'."user_panel.html");
		$isActive = Database::getUserContract($_SESSION['id']);
$info="";
	$info .= '<dl class="threeColumnsCard">';
    $info .= '<dt> Informazioni personali</dt>';
    $info .= '<dd class="cont_corso">';
    $info .= '<p class="livello_corso">Email: ' . $_SESSION['cod'] .'</p>';

    $info .=  '</dd>';
    $info .= '</dl>';

	if(isset($isActive))
	{
		$page = str_replace("*abbonamento*","<h1> Il tuo abbonamento è attivo fino al ".$isActive[0]['dataScadenza'] ."</h1>",$page);



	$courses = Database::getCoursesByUserId($_SESSION['id']);
    $info .= '<dl class="threeColumnsCard">';
    $info .= '<dt>Corsi scelti</dt>';
    $info .= '<dd class="cont_corso">';
    for ($i=0; $i <count($courses); $i++) { 
    	$info .= '<p class="livello_corso corsoScelto">'.$courses[$i]['nome'].'</p>';
    	$info .= '<p class="livello_corso simplePar">Obiettivo: '  .$courses[$i]['obiettivo'].'</p>';
    	$info .= '<p class="livello_corso simplePar">Durata: '.$courses[$i]['durata']. 'min</p>';
    }
   
    $info .=  '</dd>';
    $info .= '</dl>';

    $page = str_replace("*informazioni*",$info,$page);
	}
	else{
		$page = str_replace("*abbonamento*","<p> Non hai un abbonamento attivo</p>",$page);
		$page = str_replace("*informazioni*","<p> Vai nell'area <a href=\"./user_abb\">Gestione Abbonamento</a> è sceglierne uno</p>",$page);

	}


//echo $header;
echo $page;


?>