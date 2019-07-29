<?php

$head = file_get_contents(dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR."html".DIRECTORY_SEPARATOR."templates".DIRECTORY_SEPARATOR."head.html");
$header = file_get_contents(dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR."html".DIRECTORY_SEPARATOR."templates".DIRECTORY_SEPARATOR."header.html");

print_r(dirname(dirname(__DIR__))); ///var/www/html/ProgettoTec

$uri_case = explode(DIRECTORY_SEPARATOR, $_SERVER['REQUEST_URI'], 3);
print_r($uri_case);
//$uri_case[0] = substr($uri_case[0], strrpos($uri_case[0], '/')+1);
switch ($uri_case[2]){
    case "":
        $head = str_replace("*title*","Homepage | AIMFit",$head);
        $head = str_replace("*description*","Homepage della palestra AIMFit di Padova.",$head);
        $head = str_replace("*keywords*","AIMFit, palestra, fitness, pesi, allenatori,corsi",$head);
        $page = dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR."php".DIRECTORY_SEPARATOR."pagine".DIRECTORY_SEPARATOR."home.php";
        break;
    case "registrazione":
        $head = str_replace("*title*","Registrati | AIMFit",$head);
        $head = str_replace("*description*","Registrati a AIMFit",$header);
        $head = str_replace("*keywords*","registrazione, palestra, AIMFit, fitness",$head);
        $page = dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR."php".DIRECTORY_SEPARATOR."pagine".DIRECTORY_SEPARATOR."registrazione.php";
        break;
    default:
        $page = dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR."php".DIRECTORY_SEPARATOR."pagine".DIRECTORY_SEPARATOR."not_found.php";
        break;
}

/*$tabIndex = 2;
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
$header = str_replace("*linkinfo*","<li><a href='./info-e-contatti' tabindex=\"$tabIndex\">Info e Contatti</a></li>",$header,$counter);*/
echo $head;
echo $header;
require_once $page;
require_once 'footer.php';