<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    require_once "../database/database.php";
    require_once "../tools/validator.php";

	use Database\Database;
    use Validator\Validator;
	$database = new Database();

$errore = false;

		$page = file_get_contents(dirname(dirname(__DIR__)).'/'."html".'/'."pagine".'/'."user_abb.html");
		$isActive = Database::getUserContract($_SESSION['id']);
        if($isActive){
            $corsi="";
            $allcourses = Database::selectCourses();
            $UserCourses = Database::getCoursesByUserID( $_SESSION['id']);
        if(count($UserCourses) >1){
            $page = str_replace('*stato*', 'disabled id="disabledField"', $page);
            $page = str_replace('*titoloinfo2*', "<h2>Attenzione: Hai già scelto il massimo dei corsi offerti dalla palestra! Aspetta la fine dell'abbonamento</h2>", $page);
        }
        else{
            $page = str_replace('*stato*', '', $page);
            $page = str_replace('*titoloinfo2*', "", $page);
            $page=str_replace('*confirmmessage*', '', $page);
        } 
            for ($i=0; $i < count($allcourses) ; $i++) {
                for ($j=0; $j < count($UserCourses); $j++) { 
                    if($allcourses[$i]['nome'] === $UserCourses[$j]['nome'])
                        {
                            $i++; $j=0;
                        } 
                }
            $corsi .= '<option value="'.$allcourses[$i]['nome'].'">'.$allcourses[$i]['nome'].'</option>';
            }
        }
        else{
            $page = str_replace('*titoloinfo2*', "<h2>Non hai nessun abbonamento attivo! Scegliene uno:</h2>", $page);
        }   
       
        if (!isset($_POST['salvaCorso'])) //non è stato fatto submit
        {
            $page = str_replace("*titoloinfo*","<h1>In questa pagina puoi gestire il tuo abbonamento</h1>",$page);
        }
    else{ 
            $updateCorsoID = Database::getIdCorso($_POST['corsoSelezionato']);
            $userIdContract = Database::getUserContract($_SESSION['id']);
            var_dump($updateCorsoID);
            var_dump($userIdContract);
            $insert = Database::InsertCoursesByUser($userIdContract[0]['idContratto'],$updateCorsoID[0]['idCorso']);

            if($insert){
                $page = str_replace('*confirmmessage*', '<p>Corso inserito con successo!</p>', $page);
            }
            else{
                $page = str_replace('*confirmmessage*', '<p>Errore!</p>', $page);
            }
            unset($_POST['salvaCorso']);
    }

$page=str_replace('*corsi*', $corsi, $page);
$page=str_replace('*erroremail*', '', $page);
$page=str_replace('*errorpasword*', '', $page);
$page=str_replace('*errortelefono*', '', $page);
//echo $header;
echo $page;


?>