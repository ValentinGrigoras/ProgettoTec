
<?php 

require_once "./../../php/database/database.php";
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . "templates" . DIRECTORY_SEPARATOR . "utilities.php";

use Utilities\Utilities;
use Database\Database;

$database = new Database();

if ($database) {
  $page = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "corsi.html");
$courses = Database::selectCourses();
if(isset($courses))


$course = "";
  for($indice = 0;$indice<count($courses); $indice++){

    $course .= '<dl id="'.$courses[$indice]['idCorso'].'" class="threeColumnsCard">';
    $course .= '<dt>'.$courses[$indice]['nome'].'</dt>';

    $course .= '<dd class="cont_corso">';
    $course .= '<img class = "corsiImg" src="img/corsi/'.$courses[$indice]['nomeImg']. '"' . ' alt="immagine corso' . $courses[$indice]['nome'] . '"/>';
    $course .= '<p  class="livello_corso">Livello: ' . $courses[$indice]['livello'] .'</p>';

    $course .= '<p  class="livello_corso">Durata sessione: ' . $courses[$indice]['durata'] . ' minuti'.'</p>';
  
    $course .= '<p  class="desc_corso">' . $courses[$indice]['descrizione'] . '</p>';
  
    $course .=  '</dd>';
    $course .= '</dl>';


  }
  $page = str_replace("*corsi*", $course, $page);
}

echo $page;
?>