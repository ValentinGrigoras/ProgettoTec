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
 $corsi = "";
 $abbon = "";
		$page = file_get_contents(dirname(dirname(__DIR__)).'/'."html".'/'."pagine".'/'."user_abb.html");
		$isActive = Database::getUserContract($_SESSION['id']);
        var_dump($isActive);
        if($isActive){
            $corsi="";
            $allcourses = Database::selectCourses();
            $UserCourses = Database::getCoursesByUserID( $_SESSION['id']);
            $remain = 2-count($UserCourses);
            if($remain == 0) $page = str_replace("*statoBtnCorsi*", "disabled", $page);
            $page = str_replace("*remain*", "<p>Puoi aggiungere ".$remain." corsi!</p>", $page);
            $page = str_replace("*formAbb*", "", $page);

            $temp = '<form id="modifyCourses_form" action="./user_abb" method="POST" >
                    <fieldset *stato*>
                        <div class="form_entry">
                            <label for="corsoSelezionato">Seleziona corso</label>
                            <select tabindex="'.$tabIndex.'"name="corsoSelezionato">
                                   *corsi*
                            </select>';
                    $tabIndex++;        
            $temp.='          </div>
                    </fieldset>
                    <button id="salvaCorso" type="submit" name="salvaCorso" value="salvaCorso" *statoBtnCorsi* tabindex="'.$tabIndex.'">Aggiungi corso</button>
                    *confirmmessage2*';
                    $tabIndex++;
            $page = str_replace('*formCorsi*',$temp,$page);
            if($remain == 0) $page = str_replace("*statoBtnCorsi*", "disabled", $page);
            if( isset($UserCourses) && count($UserCourses) >1){
                $page = str_replace('*stato*', 'disabled id="disabledField"', $page);
                $page = str_replace('*titoloinfo2*', "<p id='attenzione'>Attenzione: Hai già scelto il massimo dei corsi offerti dalla palestra! </p>", $page);
            }
            else{
                $page = str_replace('*stato*', '', $page);
                $page = str_replace('*titoloinfo2*', "<p>Puoi selezionare i corsi da aggiungere al tuo abbonamento</p>", $page);
                $page=str_replace('*confirmmessage*', '', $page);
            }

            for ($i=0; $i < count($allcourses) ; $i++) {
                $trovato = false;
              if(isset($UserCourses)){
                        for ($j=0; $j < count($UserCourses); $j++) { 
                            if($allcourses[$i]['nome'] === $UserCourses[$j]['nome'])
                            {
                                $trovato=true;
                            } 
                         }
                }
                if(!$trovato) $corsi .= '<option value="'.$allcourses[$i]['nome'].'">'.$allcourses[$i]['nome'].'</option>'; 
                
            }
            $page = str_replace("*corsi", $corsi, $page);

        }else{ // se l'utente non ha ancora un abbonamento
            $page = str_replace('*titoloinfo2*', "<p>Non hai nessun abbonamento attivo! Scegliene uno:<p>", $page);
            $page = str_replace('*formCorsi*', '', $page);
            $temp ='<form id="AddAbb_form" action="./user_abb" method="POST" >
                    <fieldset *stato*>
                        <div class="form_entry">
                            <label for="abbSelezionato">Seleziona abbonamento</label>
                            
                                <select tabindex="'.$tabIndex.'"name="abbSelezionato">
                                   *abbSelect*
                                </select>';
                                $tabIndex++;
                     $temp.='       
                        </div>
                    </fieldset>
                    <button tabindex="'.$tabIndex.'" id="salvaAbb" type="submit" name="salvaAbb" value="salvaAbb">Conferma abbonamento</button>
                    *confirmmessage*'; $tabIndex++;
        $page = str_replace('*formAbb*',$temp,$page);
             $abbonamenti = Database::getSubscriptionsTypes();
             for ($i=0; $i < count($abbonamenti) ; $i++) {
                $abbon .= '<option value="'.$abbonamenti[$i]['tipoAbbonamento'].'">'.$abbonamenti[$i]['tipoAbbonamento'].' ('.$abbonamenti[$i]['prezzo'].'&euro;)'.'</option>';
            }
            $page = str_replace("*abbSelect*", $abbon, $page);

            
            if (isset($_POST['salvaAbb'])){ // è stato fatto submit
                $sub = Database::getSubscriptionId($_POST['abbSelezionato']);
            
                $esito = Database::InsertUserSubscription($_SESSION['id'], 1 ,date("Y-m-d"),Validator::validateSubscriptionDate($sub[0]['tipoAbbonamento']));
                    var_dump($esito);
            }
               
        }   
       
        if (!isset($_POST['salvaCorso'])) //non è stato fatto submit
        {
            $page = str_replace("*titoloinfo*","<h1>In questa pagina puoi gestire il tuo abbonamento</h1>",$page);
            $page = str_replace("*confirmmessage2*", "", $page);

        }
    else{ 
            $page = str_replace('*confirmmessage2*', '', $page);
            $updateCorsoID = Database::getIdCorso($_POST['corsoSelezionato']);
            $userIdContract = Database::getUserContract($_SESSION['id']);

            $insert = Database::InsertCoursesByUser($userIdContract[0]['idContratto'],$updateCorsoID[0]['idCorso']);

            if($insert){
                $page = str_replace('*confirmmessage2*', '<p>Corso inserito con successo!</p>', $page);
            }
            else{
                $page = str_replace('*confirmmessage2*', '<p>Errore!</p>', $page);
            }
            unset($_POST['salvaCorso']);
            header("location: ./user_abb");  
    }
   

$page=str_replace('*corsi*', $corsi, $page);
$page=str_replace('*erroremail*', '', $page);
$page=str_replace('*errorpasword*', '', $page);
$page=str_replace('*errortelefono*', '', $page);
$page=str_replace('*confirmmessage*', '', $page);
$page=str_replace('*remain*', '', $page);
//echo $header;
echo $page;


?>