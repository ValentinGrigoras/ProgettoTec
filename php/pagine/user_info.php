<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    require_once "../database/database.php";
    require_once "../tools/validator.php";
    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . "templates" . DIRECTORY_SEPARATOR . "utilities.php";

    use Utilities\Utilities;
	use Database\Database;
    use Validator\Validator;
	$database = new Database();

$errore = false;

		$page = file_get_contents(dirname(dirname(__DIR__)).'/'."html".'/'."pagine".'/'."user_info.html");
		$isActive = Database::getUserContract($_SESSION['id']);
        $page = str_replace("*email*", $_SESSION['cod'], $page);
        $pass = Database::getPassword( $_SESSION['cod']);
        $page = str_replace("*password*", $pass[0]['password'], $page);
        $page = str_replace("*telefono*", $pass[0]['tel'], $page);
        $page = str_replace("*titoloinfo*","<h1>In questa pagina puoi modificare il tuo profilo</h1>",$page);
        if (!isset($_POST['signup'])) //non è stato fatto submit
        {
            $page = str_replace("*password*", $pass[0]['password'], $page);
            $page = str_replace("*telefono*", $pass[0]['tel'], $page);
            $page = str_replace("*titoloinfo*","<h1>In questa pagina puoi modificare il tuo profilo</h1>",$page);
        }
    else{ 
    //controllo mail
        echo "1";
        if ($_POST['email']==""){
            $error=true;
            $page=str_replace('*erroremail*', '<p class="error">Inserire l\' <span xml:lang=\"en\">email</span>.</p>', $page);
        }else if (!Validator::emailValidator($_POST['email'])){
                $error=true;
                $page=str_replace('*erroremail*', '<p class="error">Il campo <span xml:lang=\"en\">Email</span> inserito non è corretto. Rispettare il formato indicato.</p>', $page);
            }
        
    //controllo password
        if ($_POST['password']==""){
            $error=true;
            $page=str_replace('errorpassword*', '<p class="error">Inserire una <span xml:lang=\"en\">password</span>.</p>', $page);
        }else{
            echo "2";
            if (!Validator::passwordValidator($_POST['password'])){
                $error=true;
                $page=str_replace("*errorpassword*", '<p class="error">La <span xml:lang=\"en\">password</span> non &egrave; valida. Rispettare il formato indicato.</p>', $page);
            }
        }
        if (($_POST['telefono'])!="" && !Validator::mobileValidator($_POST['telefono'])){
            $error=true;
            $page=str_replace('*errortelefono*', '<p class="error">Il numero di telefono inserito non &egrave; valido. Rispettare il formato indicato.</p>', $page);
        }

        if (!$errore){
            
            $modifyuser = Database::modifyUser($_POST['email'], $_POST['password'], $_POST['telefono'], $_SESSION['id']);
            if (isset($modifyuser) && $modifyuser){
                echo "ciao vale";
                $user = Database::selectUser($_POST['email']);
                if (isset($user)) { //l'utente è stato registrato in db
                    $page= str_replace("*confirmmessage*", '<p id="confirm">Informazioni modificate con successo!</p>', $page);
                }else{
                    $error=true;
                }
            }
            $page = str_replace("*errorpassword*", "", $page);
            $page = str_replace("*confirmmessage*", "", $page);
        }
    }

    $page = str_replace("*tabindexemail*", $tabIndex, $page, $counter);
    if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
    $page = str_replace("*tabindexpassword*", $tabIndex, $page, $counter);
    if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
    $page = str_replace("*tabindextelefono*", $tabIndex, $page, $counter);
    if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
    $page = str_replace("*tabindexsignup*", $tabIndex, $page, $counter);
    if ($counter > 0) Utilities::checkCounter($counter,$tabIndex);
$page=str_replace('*erroremail*', '', $page);
$page=str_replace('*errorpasword*', '', $page);
$page=str_replace('*errortelefono*', '', $page);
$page=str_replace('*confirmmessage*', '', $page);
$page=str_replace('*errorpassword*', '', $page);
//echo $header;
echo $page;


?>