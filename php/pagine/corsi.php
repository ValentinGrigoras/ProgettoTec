
<?php 

require_once "./../../php/database/database.php";
require_once "./../../php/tools/validator.php";

use Database\Database;
use Validator\Validator;

$database = new Database();

if ($database) {
  $page = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "corsi.html");
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
  //var_dump(allCourses);
  $page = str_replace("*corsi*", $course, $page);
}

echo $page;
?>