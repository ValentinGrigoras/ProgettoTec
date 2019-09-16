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
 $corsi = "";
 $abbon = "";
		$page = file_get_contents(dirname(dirname(__DIR__)).'/'."html".'/'."pagine".'/'."user_abb.html");
		$isActive = Database::getUserContract($_SESSION['id']);
        if($isActive){
            $corsi="";
            $allcourses = Database::selectCourses();
            $UserCourses = Database::getCoursesByUserID( $_SESSION['id']);
            var_dump($UserCourses);
            $page = str_replace('*formCorsi', '<form id="modifyCourses_form" action="./user_abb" method="POST" >
                    <fieldset *stato*>
                        <div class="form_entry">
                            <label for="corsoSelezionato">Seleziona corso</label>
                            <select name="corsoSelezionato">
                                   *corsi*
                            </select>
                            
                        </div>
                    </fieldset>
                    <button id="salvaCorso" type="submit" name="salvaCorso" value="salvaCorso">Aggiungi corso</button>
                    *confirmmessage*', $page);

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
        }else{ // se l'utente non ha ancora un abbonamento
            $page = str_replace('*titoloinfo2*', "<p>Non hai nessun abbonamento attivo! Scegliene uno:<p>", $page);
            $page = str_replace('*formCorsi*', '', $page);
            $page = str_replace('*formAbb*', '<form id="AddAbb_form" action="./user_abb" method="POST" >
                    <fieldset *stato*>
                        <div class="form_entry">
                            <label for="abbonamento">Seleziona abbonamento</label>
                            
                            
                                <select name="abbSelezionato">
                                   *abbSelect*
                                </select>
                            
                        </div>
                    </fieldset>
                    <button id="salvaAbb" type="submit" name="salvaAbb" value="salvaAbb">Conferma abbonamento</button>
                    *confirmmessage*', $page);

             $abbonamenti = Database::getSubscriptionsTypes();
             for ($i=0; $i < count($abbonamenti) ; $i++) {
                $abbon .= '<option value="'.$abbonamenti[$i]['tipoAbbonamento'].'">'.$abbonamenti[$i]['tipoAbbonamento'].' ('.$abbonamenti[$i]['prezzo'].'&euro;)'.'</option>';
            }
            $page = str_replace("abbSelect", $abbon, $page);

            
            if (isset($_POST['salvaAbb'])){ // è stato fatto submit
                $sub = Database::getSubscriptionsId($_POST['abbSelezionato']);
            var_dump($_POST['abbSelezionato']);
                $esito = Database::InsertUserSubscription($_SESSION['id'], 1 ,date("Y-m-d"),Validator::validateSubscriptionDate($sub[0]['tipoAbbonamento']));
                    var_dump($esito);
            }
               
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