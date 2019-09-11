
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

$page = file_get_contents(dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "html" . DIRECTORY_SEPARATOR . "pagine" . DIRECTORY_SEPARATOR . "login.html");
if ($database) {

	if (isset($_SESSION['error']) && $_SESSION['error'] == 1) {
		
			$page=str_replace('<p class="hidden">*erroremail*</p>', '<p class="error">Il campo <span xml:lang=\"en\">Email</span> inserito non è corretto. Rispettare il formato indicato.</p>', $page);
			$_SESSION['error'] = 0;
		}
		else if (isset($_SESSION["autorizzato"]) &&  $_SESSION["autorizzato"]==1){
			$page = str_replace("*ciao*", "class=\"hidden\"", $page);
			$page.= "<h1> sei già loggato </h1>";
		}
			  		

	}        
		
	
	echo $page;
?>
