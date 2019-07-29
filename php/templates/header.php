<?php

$head = file_get_contents(dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR."html".DIRECTORY_SEPARATOR."templates".DIRECTORY_SEPARATOR."head.html");
$header = file_get_contents(dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR."html".DIRECTORY_SEPARATOR."templates".DIRECTORY_SEPARATOR."header.html");

$uri_case = explode("/", $_SERVER['REQUEST_URI'], 5);
print_r($uri_case);
//$uri_case[0] = substr($uri_case[0], strrpos($uri_case[0], '/')+1);

switch ($uri_case[4]){
    case "home.php":
        $head = str_replace("*title*","Homepage | AIMFit",$head);
        $head = str_replace("*description*","Homepage della palestra AIMFit di Padova.",$head);
        $head = str_replace("*keywords*","AIMFit, palestra, fitness, pesi, allenatori,corsi",$head);
        $page = dirname(__DIR__).DIRECTORY_SEPARATOR."pagine".DIRECTORY_SEPARATOR."home.php";
        break;
    case "registrazione.php":
        $head = str_replace("*title*","Mostre | Museo Ferrari",$head);
        $head = str_replace("*description*","Nella pagina delle mostre è presente una descrizione della mostra Il cavallino degli anni '50 e l'elenco delle prossime mostre che si terranno al museo",$header);
        $head = str_replace("*keywords*","cavallino,mostre,museo",$head);
        $page = dirname(__DIR__).DIRECTORY_SEPARATOR."pagine".DIRECTORY_SEPARATOR."registrazione.php";
        break;
    default:
        $page = dirname(__DIR__).DIRECTORY_SEPARATOR."pages".DIRECTORY_SEPARATOR."not-found.php";
        break;
}

$tabIndex = 2;
$header = str_replace("*title*","Pagina non trovata",$header);
$header = str_replace("*breadcrumbs*","Pagina non trovata",$header);
$header = str_replace("*linkhome*","<li><a href='./' xml:lang='en' tabindex=\"$tabIndex\">Home</a></li>",$header,$counter);
if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$header = str_replace("*linkmostre*","<li><a href='./mostre' tabindex=\"$tabIndex\">Mostre</a></li>",$header,$counter);
if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$header = str_replace("*linkmodelli*","<li><a href='./modelli-esposti' tabindex=\"$tabIndex\">Modelli esposti</a></li>",$header,$counter);
if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$header = str_replace("*linkbiglietti*","<li><a href='./biglietti' tabindex=\"$tabIndex\">Biglietti</a></li>",$header,$counter);
if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$header = str_replace("*linkinfo*","<li><a href='./info-e-contatti' tabindex=\"$tabIndex\">Info e Contatti</a></li>",$header,$counter);
echo $header;
require_once $page;
require_once 'footer.php';