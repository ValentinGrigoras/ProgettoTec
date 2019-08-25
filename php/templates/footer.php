
<?php
$footer = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "templates" . '/' . "footer.html");

$footer = str_replace("*gotop*","<button onclick=\"topFunction()\" id=\"tornasu\" title=\"Torna su\"><i class=\"fas fa-angle-double-up\"></i></button>",$footer);
$footer = str_replace("*script*","
		<script src=\"./../../js/gototop.js\" type=\"text/javascript\"></script>
      	<script src=\"./../../js/show_menu.js\" type=\"text/javascript\"></script>
      	<script src=\"./../../js/map_show.js\" type=\"text/javascript\"></script>
      	",$footer);


//per script su pagine specifiche
/*$uri_case = explode('/', $_SERVER['REQUEST_URI'], 3);
switch ($uri_case[2]){
    default:
        $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."not_found.php";
        break;
}*/
echo $footer;
?>