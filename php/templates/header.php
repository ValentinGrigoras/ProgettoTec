<?php

$header = file_get_contents(dirname(dirname(__DIR__)).'/'."html".'/'."templates".'/'."header.html");

//print_r(dirname(dirname(__DIR__))); ///var/www/html/ProgettoTec

$uri_case = explode('/', $_SERVER['REQUEST_URI'], 3);
//print_r($uri_case);
//$uri_case[0] = substr($uri_case[0], strrpos($uri_case[0], '/')+1);

switch ($uri_case[2]){
    case "":
        $header = str_replace("*linkhome*","<li id='active_link'><span xml:lang='en'>Home</span></li>",$header);
        $header = str_replace("*breadcrumbs*","<span xml:lang='en'>Home</span>",$header);
        $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."home.php";
        break;
    case "registrazione":
        $header = str_replace("*linkregistrazione*","<li id='active_link'>Registrazione</li>",$header);
        $header = str_replace("*breadcrumbs*","<span xml:lang='en'>Home</span> >> Registrazione",$header);
        $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."registrazione.php";
        break;
    case "login":
        $header = str_replace("*linklogin*","<li id='active_link'>Login</li>",$header);
        $header = str_replace("*breadcrumbs*","<span xml:lang='en'>Home</span> >> Login",$header);
        $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."login.php";
        break;
    case "admin":
        $header = str_replace("*linklogin*","<li id='active_link'>Admin</li>",$header);
        $header = str_replace("*breadcrumbs*","<span xml:lang='en'>Home</span> >> Admin",$header);
        $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."admin_login.php";
        break;
    case "corsi":
        $header = str_replace("*linkcorsi*","<li id='active_link'>Corsi</li>",$header);
        $header = str_replace("*breadcrumbs*","<span xml:lang='en'>Home</span> >> Corsi",$header);
        $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."corsi.php";
        break;
    case "prezzi":
        $header = str_replace("*linkprezzi*","<li id='active_link'>Prezzi</li>",$header);
        $header = str_replace("*breadcrumbs*","<span xml:lang='en'>Home</span> >> Prezzi",$header);
        $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."prezzi.php";
        break;
    default:
        $page = dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."not_found.php";
        break;
}

$tabIndex = 2;
$header = str_replace("*linkhome*","<li><a href='./' xml:lang='en' tabindex=\"$tabIndex\">Home</a></li>",$header);
//if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$header = str_replace("*linkchisiamo*","<li><a href='./su_di_noi' tabindex=\"$tabIndex\">Chi siamo</a></li>",$header);
//if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$header = str_replace("*linkallenatori*","<li><a href='./allenatori' tabindex=\"$tabIndex\">Allenatori</a></li>",$header);
//if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$header = str_replace("*linkcontattaci*","<li><a href='./contattaci' tabindex=\"$tabIndex\">Contattaci</a></li>",$header);
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