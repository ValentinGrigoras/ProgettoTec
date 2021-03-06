
<?php
require_once "./utilities.php";
use Utilities\Utilities;

$footer = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "templates" . '/' . "footer.html");

$footer = str_replace("*gotop*","<a tabindex=\"$tabIndex\" id=\"up\" href=\"#main_container\">Torna su</a>",$footer);
$tabIndex++;

$script="
		<script src=\"./js/gototop.js\" type=\"text/javascript\"></script>
		<script src=\"./js/common.js\" type=\"text/javascript\"></script>
      	";

$uri_case = explode('/', $_SERVER['REQUEST_URI'], 3);
switch ($uri_case[2]){
	case "":
		$script.="
      		<script src=\"./js/contattaci.js\" type=\"text/javascript\"></script>";
		break;
	case "registrazione":
		$script.="<script src=\"./js/registrazione.js\" type=\"text/javascript\"></script>
					<script src=\"./js/moment.js\" type=\"text/javascript\"></script>";
		break;
	case "programma":
		$script.="<script src=\"./js/filtro_corsi.js\" type=\"text/javascript\"></script>";
		break;
	case "login":
		$script.="<script src=\"./js/login.js\" type=\"text/javascript\"></script>";
		break;
	case "chi_siamo":
		$script.="<script src=\"./js/slideshow.js\" type=\"text/javascript\"></script>";
		break;
    default:
        $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."not_found.php";
        break;
}

$footer = str_replace("*script*",$script,$footer);

$footer = str_replace("*linksudinoi*","./chi_siamo",$footer);
$footer = str_replace("*linkcorsi*","./corsi",$footer);
$footer = str_replace("*linkallenatori*","./allenatori",$footer);
$footer = str_replace("*linkprogramma*","./programma",$footer);
$footer = str_replace("*linkprezzi*","./prezzi",$footer);
$footer = str_replace("*linkcontattaci*","./#contact_us_form",$footer);





echo $footer;
?>