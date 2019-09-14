<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    require_once "./../database/database.php";

	use Database\Database;
	$database = new Database();
	//$header = file_get_contents(dirname(dirname(__DIR__)).'/'."html".'/'."templates".'/'."user_panel_header.html");


	if (!isset($_SESSION["autorizzato"])) {
	  echo "<h1>Area riservata, accesso negato.</h1>";
	  echo "Per effettuare il login clicca <a href='login'><font color='blue'>qui</font></a>";
	  die;
	}
	else{
		echo "sono in else";
		$page = file_get_contents(dirname(dirname(__DIR__)).'/'."html".'/'."pagine".'/'."user_panel.html");
		$isActive = Database::getUserContract($_SESSION['id']);

	}

	if(isset($isActive))
	{
		$page = str_replace("*content*","<p> Il tuo abbonamento è attivo fino al ".$isActive[0]['dataScadenza'] ."</p>",$page);
	}
	else{
		$page = str_replace("*content*","<p> Non hai un abbonamento attivo</p>",$page);
	}


//echo $header;
echo $page;


?>