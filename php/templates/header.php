<?php

$header = file_get_contents(dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR."html".DIRECTORY_SEPARATOR."templates".DIRECTORY_SEPARATOR."header.html");

//print_r(dirname(dirname(__DIR__))); ///var/www/html/ProgettoTec

$uri_case = explode(DIRECTORY_SEPARATOR, $_SERVER['REQUEST_URI'], 3);
//print_r($uri_case);
//$uri_case[0] = substr($uri_case[0], strrpos($uri_case[0], '/')+1);

switch ($uri_case[2]){
    case "":
        $header = str_replace("*linkhome*","<li id='active_link'><span xml:lang='en'>Home</span></li>",$header);
        $header = str_replace("*breadcrumbs*","<span xml:lang='en'>Home</span>",$header);
        $page = dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR."php".DIRECTORY_SEPARATOR."pagine".DIRECTORY_SEPARATOR."home.php";
        break;
    case "registrazione":
        $header = str_replace("*linkregistrazione*","<li id='active_link'>Registrazione</li>",$header);
        $header = str_replace("*breadcrumbs*","<span xml:lang='en'>Home</span> >> Registrazione",$header);
        $page = dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR."php".DIRECTORY_SEPARATOR."pagine".DIRECTORY_SEPARATOR."registrazione.php";
        break;
    default:
        $page = dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR."php".DIRECTORY_SEPARATOR."pagine".DIRECTORY_SEPARATOR."not_found.php";
        break;
}

//$tabIndex = 2;
$header = str_replace("*linkhome*","<li><a href='./' xml:lang='en' tabindex=\"$tabIndex\">Home</a></li>",$header);
//if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$header = str_replace("*linkchisiamo*","<li><a href='./su_di_noi' tabindex=\"$tabIndex\">Chi siamo</a></li>",$header);
//if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$header = str_replace("*linkallenatori*","<li><a href='./allenatori' tabindex=\"$tabIndex\">Allenatori</a></li>",$header);
//if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$header = str_replace("*linkcontattaci","<li><a href='./contattaci' tabindex=\"$tabIndex\">Contattaci</a></li>",$header);
//if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$header = str_replace("*linkcorsi*","<li><a href='./corsi' tabindex=\"$tabIndex\">Corsi</a></li>",$header);
//if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$header = str_replace("*linkprogramma*","<li><a href='./programma' tabindex=\"$tabIndex\">Programma</a></li>",$header);
//if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$header = str_replace("*linkprezzi*","<li><a href='./prezzi' tabindex=\"$tabIndex\">Prezzi</a></li>",$header);
//if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$header = str_replace("*linkregistrazione*","<li><a href='./registrazione' tabindex=\"$tabIndex\">Registrati</a></li>",$header);
//if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$header = str_replace("*linklogin*","<li><a href='./login' tabindex=\"$tabIndex\">Login</a></li>",$header);
//if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);


require_once 'head.php';
echo $header;
require_once $page;
require_once 'footer.php';