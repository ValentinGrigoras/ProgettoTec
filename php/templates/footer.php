
<?php
$footer = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "templates" . '/' . "footer.html");

$footer = str_replace("*gotop*","<button onclick=\"topFunction()\" id=\"tornasu\" title=\"Torna su\"><i class=\"fas fa-angle-double-up\"></i></button>",$footer);
$script="
		<script src=\"./js/gototop.js\" type=\"text/javascript\"></script>
		<script src=\"./js/common.js\" type=\"text/javascript\"></script>
      	";

$uri_case = explode('/', $_SERVER['REQUEST_URI'], 3);
switch ($uri_case[2]){
	case "":
		$script.="
			<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyD0rh7lb9IlH8E4nMs1nffxwW8SL05LaHo&callback=myMap\"></script>
      		<script src=\"./js/show_menu.js\" type=\"text/javascript\"></script>
      		<script src=\"./js/map_show.js\" type=\"text/javascript\"></script>";
		break;
	case "registrazione":
		$script.="<script src=\"./js/validazione_reg.js\" type=\"text/javascript\"></script>";
		break;
	case "programma":
		$script.="<script src=\"./js/filtro_corsi.js\" type=\"text/javascript\"></script>";
		break;
	case "login":
		$script.="<script src=\"./js/login_replace.js\" type=\"text/javascript\"></script>";
		break;
    default:
        $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."not_found.php";
        break;
}

$footer = str_replace("*script*",$script,$footer);
echo $footer;
?>