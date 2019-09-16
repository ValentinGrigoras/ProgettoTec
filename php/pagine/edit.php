
<?php 

require_once "./../../php/database/database.php";
require_once "./../../php/tools/validator.php";

use Database\Database;
use Validator\Validator;
$database = new Database();
$page = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "modificaCorsi.html");
if (isset($_POST)&!empty($_POST)){
    //echo"sei in POST: ";
    //$idCorso=Database::getIdCorso($_POST['nome']);

    $update=Database::updateCorsi($_POST['nome'],$_POST['livello'],
    $_POST['costo'],

    $_POST['descrizione'],$_POST['idCorso']
    );
       var_dump($_POST);

    if($update){
        //echo"è stato modificato correttamente";
        header('Location: viewcorsi.php');
    }
}else{



if ($database) {
  $update = Database::updateCorsi($_POST['nomeCorso'],$_POST['livello'], $_POST['oraInizio'],$_POST['prezzo'],$_POST['tipo'],$_POST['desc']);
  // POST 

    $page = str_replace("*nome*", $_GET['nomeCorso'], $page);
    $page = str_replace("*livello*", $_GET['livello'], $page);
    $page = str_replace("*inizio*", $_GET['oraInizio'], $page);
    $page = str_replace("*fine*", $_GET['oraFine'], $page);
    $page = str_replace("*giorno*", $_GET['giorno'], $page);
    $page = str_replace("*prezzo*", $_GET['prezzo'], $page);
    $page = str_replace("*tipo*", $_GET['tipo'], $page);
    $page = str_replace("*desc*", $_GET['desc'], $page);
    $page = str_replace("*idCorso*", $_GET['idCorso'], $page);
    //var_dump(allCourses);
  }



$courses = Database::selectCourses();
if(isset($courses))

$course = "";
  for($indice = 0;$indice<count($courses); $indice++){

    $course .= '<dl class="threeColumnsCard">';
    $course .= '<dt>'.$courses[$indice]['nome'].'</dt>';
    $course .= '<dd class="cont_corso">';
    $course .= '<img class = "corsiImg" src="img/corsi/'.$courses[$indice]['nomeImg']. '"' . ' alt="immagine ' . $courses[$indice]['nome'] . '"/>';
    $course .= '<p class="livello_corso">Livello: ' . $courses[$indice]['livello'] .'</p>';
    $course .= '<p class="livello_corso">Durata sessione: ' . $courses[$indice]['durata'] . ' min'.'</p>';
    $course .= '<p class="livello_corso">Costo al mese : ' . $courses[$indice]['costo'] . ' &euro;' . '</p>';
    $course .= '<p class="desc_corso">' . $courses[$indice]['descrizione'] . '</p>';
    $course .=  '</dd>';
    $course .= '</dl>';


  }


  $page = str_replace("*corsi*", $course, $page);
}

echo $page;
?>