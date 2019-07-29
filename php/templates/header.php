<?php
require_once "utilities.php";
use Utilities\Utilities;

$header = file_get_contents(dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR."html".DIRECTORY_SEPARATOR."templates".DIRECTORY_SEPARATOR."head.html");
$last_uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$last_uri_parts[0] = substr($last_uri_parts[0], strrpos($last_uri_parts[0], '/')+1);

switch ($last_uri_parts[0]){
    case "":
        $header = str_replace("*title*","Homepage | AIMFit",$header);
        $header = str_replace("*description*","Homepage della palestra AIMFit di Padova.",$header);
        $header = str_replace("*keywords*","AIMFit, palestra, fitness, pesi, allenatori,corsi",$header);
        $page = dirname(__DIR__).DIRECTORY_SEPARATOR."pagine".DIRECTORY_SEPARATOR."home.php";
        break;
    case "mostre":
        $header = str_replace("*title*","Mostre | Museo Ferrari",$header);
        $header = str_replace("*description*","Nella pagina delle mostre è presente una descrizione della mostra Il cavallino degli anni '50 e l'elenco delle prossime mostre che si terranno al museo",$header);
        $header = str_replace("*keywords*","cavallino,mostre,museo",$header);
        $page = dirname(__DIR__).DIRECTORY_SEPARATOR."pages".DIRECTORY_SEPARATOR."mostre.php";
        break;
    case "modelli-esposti":
        $header = str_replace("*title*","Modelli Esposti | Museo Ferrari",$header);
        $header = str_replace("*description*","Tutti i modelli Ferrari esposti della collezione del museo, con i dettagli relativi a motore, cilindrata, potenza ed esposizione nella mostra in corso.",$header);
        $header = str_replace("*keywords*","Ferrari,motore,cilindrata",$header);
        $page = dirname(__DIR__).DIRECTORY_SEPARATOR."pages".DIRECTORY_SEPARATOR."modelli-esposti.php";
        break;
    case "biglietti":
        $header = str_replace("*title*","Biglietti | Museo Ferrari",$header);
        $header = str_replace("*description*","In questa pagina è possibile prenotare i biglietti per partecipare alle mostre  del museo. Il prezzo è di soli 15.00 € e i minori entrano gratis.",$header);
        $header = str_replace("*keywords*","biglietti,museo,mostre,gratis",$header);
        $page = dirname(__DIR__).DIRECTORY_SEPARATOR."pages".DIRECTORY_SEPARATOR."biglietti.php";
        break;
    case "info-e-contatti":
        $header = str_replace("*title*","Info e Contatti | Museo Ferrari",$header);
        $header = str_replace("*description*","Qui vi sono le informazioni relative a come raggiungere il museo, i modi per contattarci e una mappa con la posizione del museo.",$header);
        $header = str_replace("*keywords*","informazioni,contatti,mappa,posizione",$header);
        $page = dirname(__DIR__).DIRECTORY_SEPARATOR."pages".DIRECTORY_SEPARATOR."info-e-contatti.php";
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