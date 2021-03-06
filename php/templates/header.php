<?php
require_once "./utilities.php";
use Utilities\Utilities;

 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    $uri_case = explode('/', $_SERVER['REQUEST_URI'], 3);

    if(strpos($uri_case[2], 'user') !== false  && $_SESSION["autorizzato"]==1)
        $header = file_get_contents(dirname(dirname(__DIR__)).'/'."html".'/'."templates".'/'."user_panel_header.html");
    else{$header = file_get_contents(dirname(dirname(__DIR__)).'/'."html".'/'."templates".'/'."header.html");}

$trovato=false;
$tabIndex=2;
if (!isset($_SESSION["autorizzato"]) || $_SESSION["autorizzato"]==0){
    //nessun utente autenticato
    switch ($uri_case[2]){
        case "registrazione":
            $header = str_replace("*linkregistrazione*","<li class='active_link'>Registrazione</li>",$header);
            $header = str_replace("*breadcrumbs*","Ti trovi in:  Registrazione",$header);
            $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."registrazione.php";
            $trovato=true;
            break;
        case "login":
            $header = str_replace("*linklogin*","<li class='active_link'><span xml:lang='en'>Login</span></li>",$header);
            $header = str_replace("*breadcrumbs*","Ti trovi in: <span xml:lang='en'>Login</span>",$header);
            $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."login.php";
            $trovato=true;
            break;
        case "user_panel":
            header("Location: ./login");
        case "user_info": 
            header("Location: ./login");
        case "user_abb": 
            header("Location: ./login");
        case "logout_user":
            session_destroy();
           header("location: ./login");

            $trovato=true;
            break;
    }
}else{ //utente autenticato

 /*   if(strpos($uri_case[2], 'user') !== false){ // se il nome della pagina contiene la parola user, carico il header una sola volta
            $header = str_replace("*torna*","<li><a href=\"./\">&#8592; Torna al sito</a></li>",$header);
            $header = str_replace("*abbonamenti*","<li><a href=\"./user_abb\">Gestione abbonamento</a></li>",$header);
            $header = str_replace("*dati*","<li><a href=\"./user_info\">Gestione dati personali</a></li>",$header);
            $header = str_replace("*userHome*","<li><a href=\"./user_info\">Gestione dati personali</a></li>",$header);
            $header = str_replace("*email*","<li id=\"user_mail\">".$_SESSION['cod']."</li>",$header);
            $header = str_replace("*disconnetti*","<li><a href=\"./logout_user\">Disconnetti</a></li>",$header);
    }*/
    switch ($uri_case[2]){


        case "user_panel": 
            $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."user_panel.php";
            $header = str_replace("*userHome*","<li class='active_link'>Riepilogo</li>",$header);
            $trovato=true;
        break;
        case "user_info": 
            $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."user_info.php";
            $header = str_replace("*dati*","<li class='active_link'>Gestione dati personali</li>",$header);
            $trovato=true;
        break;
        case "user_abb": 
            $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."user_abb.php";
            $header = str_replace("*abbonamenti*","<li class='active_link'>Gestione abbonamento</li>",$header);
            $trovato=true;
        break;
        case "logout":
            session_destroy();
            $header =str_replace("*linkregistrazione*","<li><a href='./registrazione'>Registrazione</a></li>",$header);
            $header = str_replace("*linklogin*","<li class='active_link'><span xml:lang='en'>Login</span></li>",$header);
            $header = str_replace("*breadcrumbs*","Ti trovi in:<span xml:lang='en'>Login</span>",$header);
           header("location: ./");

            $trovato=true;
            break;
    }
}



//print_r($uri_case);
//$uri_case[0] = substr($uri_case[0], strrpos($uri_case[0], '/')+1);
if (!$trovato){
switch ($uri_case[2]){
    case "":
        $header = str_replace("*linkhome*","<li class='active_link'><span xml:lang='en'>Home</span></li>",$header);
        $header = str_replace("*breadcrumbs*","Ti trovi in: <span xml:lang='en'>Home</span>",$header);
        $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."home.php";
        break;
    case "corsi":
        $header = str_replace("*linkcorsi*","<li class='active_link'>Corsi</li>",$header);
        $header = str_replace("*breadcrumbs*","Ti trovi in: Corsi",$header);
        $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."corsi.php";
        break;
    case "prezzi":
        $header = str_replace("*linkprezzi*","<li class='active_link'>Prezzi</li>",$header);
        $header = str_replace("*breadcrumbs*","Ti trovi in: Prezzi",$header);
        $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."prezzi.php";
        break;
    case "programma":
        $header = str_replace("*linkprogramma*","<li class='active_link'>Programma</li>",$header);
        $header = str_replace("*breadcrumbs*","Ti trovi in: Programma",$header);
        $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."programma.php";
        break;
    case "allenatori":
        $header = str_replace("*linkallenatori*","<li class='active_link'>Allenatori</li>",$header);
        $header = str_replace("*breadcrumbs*","Ti trovi in:  Su di noi >> Allenatori",$header);
        $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."allenatori.php";
        break;
    case "chi_siamo":
        $header = str_replace("*linkchisiamo*","<li class='active_link'>Chi siamo</li>",$header);
        $header = str_replace("*breadcrumbs*","Ti trovi in:  Su di noi >> Chi siamo",$header);
        $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."chi_siamo.php";
        break;
    default:
        $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."not_found.php";
        break;
}}
$tabIndex = 2; $counter=0;

$header = str_replace("*tabindexbreadcrumb*",$tabIndex,$header,$counter);
if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);

//if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
if (!isset($_SESSION["autorizzato"]) || $_SESSION["autorizzato"]==0){
    //nessun utente autenticato
    $header = str_replace("*linkregistrazione*","<li><a href='./registrazione' tabindex=\"$tabIndex\">Registrazione</a></li>",$header,$counter);
    if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
	$header = str_replace("*linklogin*","<li><a href='./login' xml:lang='en' tabindex=\"$tabIndex\">Login</a></li>",$header,$counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
}else{
    $header = str_replace("*linkregistrazione*","<li><a href='./user_panel' tabindex=\"$tabIndex\">Area Personale</a></li>",$header,$counter);
    if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
	$header = str_replace("*linklogin*","<li><a href='./logout' tabindex=\"$tabIndex\">Logout</a></li>",$header,$counter);
	if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
}

if(strpos($uri_case[2], 'user') === false){

$header = str_replace("*linkhome*","<li><a href='./' xml:lang='en' tabindex=\"$tabIndex\">Home</a></li>",$header,$counter);
if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$header = str_replace("*linkcorsi*","<li><a href='./corsi' tabindex=\"$tabIndex\">Corsi</a></li>",$header,$counter);
if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$header = str_replace("*linkprogramma*","<li><a href='./programma' tabindex=\"$tabIndex\">Programma</a></li>",$header,$counter);
if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$header = str_replace("*linkprezzi*","<li><a href='./prezzi' tabindex=\"$tabIndex\">Prezzi</a></li>",$header,$counter);
if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$header = str_replace("*tabindexsudinoi*",$tabIndex,$header,$counter);
if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$header = str_replace("*linkchisiamo*","<li><a href='./chi_siamo' tabindex=\"$tabIndex\">Chi siamo</a></li>",$header,$counter);
if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$header = str_replace("*linkallenatori*","<li><a href='./allenatori' tabindex=\"$tabIndex\">Allenatori</a></li>",$header,$counter);
if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$header = str_replace("*linkcontattaci*","<li><a href='./#contact_section' tabindex=\"$tabIndex\">Contattaci</a></li>",$header,$counter);
if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
}
else{
            $header = str_replace("*torna*","<li><a href=\"./\" tabindex=\"$tabIndex\">&#8592; Torna al sito</a></li>",$header,$counter);
            if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
            $header = str_replace("*abbonamenti*","<li><a href=\"./user_abb\" tabindex=\"$tabIndex\">Gestione abbonamento</a></li>",$header,$counter);
            if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
            $header = str_replace("*dati*","<li><a href=\"./user_info\" tabindex=\"$tabIndex\">Gestione dati personali</a></li>",$header,$counter);
            if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
            $header = str_replace("*userHome*","<li><a href=\"./user_panel\">Riepilogo</a></li>",$header,$counter);
            if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
            $header = str_replace("*email*","<li id=\"user_mail\">".$_SESSION['cod']."</li>",$header,$counter);

            $header = str_replace("*disconnetti*","<li><a href=\"./logout\" tabindex=\"$tabIndex\">Disconnetti</a></li>",$header,$counter);
            if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);

}
/*$header = str_replace("*tabindexnoscript*",$tabIndex,$header,$counter);
if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);*/

if(strpos($uri_case[2], 'user') === false){
require_once 'head.php';
}
echo $header;

require_once $page;
if(strpos($uri_case[2], 'user') === false){
require_once 'footer.php';
}