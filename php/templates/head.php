<?php

$head = file_get_contents(dirname(dirname(__DIR__)).'/'."html".'/'."templates".'/'."head.html");

$uri_case = explode('/', $_SERVER['REQUEST_URI'], 3);

//print_r($uri_case);
//$uri_case[0] = substr($uri_case[0], strrpos($uri_case[0], '/')+1);
switch ($uri_case[2]){
    case "":
        $head = str_replace("*title*","Pagina iniziale | AIMFit",$head);
        $head = str_replace("*description*","Homepage della palestra AIMFit di Padova.",$head);
        $head = str_replace("*keywords*","AIMFit, palestra, fitness, pesi, allenatori, corsi",$head);
        break;
    case "registrazione":
        $head = str_replace("*title*","Registrati | AIMFit",$head);
        $head = str_replace("*description*","Registrati a AIMFit",$head);
        $head = str_replace("*keywords*","registrazione, palestra, AIMFit, fitness",$head);
        break;
    case "login":
        $head = str_replace("*title*","Login | AIMFit",$head);
        $head = str_replace("*description*","Login a AIMFit",$head);
        $head = str_replace("*keywords*","login, palestra, AIMFit, fitness",$head);
        break;
    case "corsi":
        $head = str_replace("*title*","Corsi | AIMFit",$head);
        $head = str_replace("*description*","Corsi AIMFit",$head);
        $head = str_replace("*keywords*","corsi, palestra, AIMFit, fitness",$head);
        break;
   
    case "admin":
        $head = str_replace("*title*","Admin | AIMFit",$head);
        $head = str_replace("*description*","Admin AIMFit",$head);
        $head = str_replace("*keywords*","admin, palestra, AIMFit, fitness",$head);
        break;
      
    case "programma":
        $head = str_replace("*title*","Programma | AIMFit",$head);
        $head = str_replace("*description*","Programma settimanale della palestra AIMFit",$head);
        $head = str_replace("*keywords*","programma, orario, palestra, AIMFit, fitness",$head);
        break;
    case "chi_siamo":
        $head = str_replace("*title*","Chi siamo | AIMFit",$head);
        $head = str_replace("*description*","Breve info sulla nostra palestra AIMFit",$head);
        $head = str_replace("*keywords*","info, palestra, AIMFit, fitness",$head);
        break;
    case "allenatori":
        $head = str_replace("*title*","I nostri allenatori | AIMFit",$head);
        $head = str_replace("*description*","Info sui nostri allenatori AIMFIT",$head);
        $head = str_replace("*keywords*","info,allenatori, palestra, AIMFit, fitness",$head);
        break;
    default:
        $head = str_replace("*title*","Pagina non trovata",$head);
        $head = str_replace("*breadcrumbs*","Pagina non trovata",$head);
        break;
}

/*$tabIndex = 2;
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