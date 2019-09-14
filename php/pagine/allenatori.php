
<?php 

require_once "./../../php/database/database.php";
require_once "./../../php/tools/validator.php";

use Database\Database;
use Validator\Validator;

$database = new Database();

if ($database) {
  $page = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "allenatori.html");
$trainers = Database::selectTrainers();
if(isset($trainers))

$trainer = "";
  for($indice = 0;$indice<count($trainers); $indice++){

    $trainer .= '<dl id="'.$trainers[$indice]['idAllenatore'].'"class="threeColumnsCard">';
    $trainer .= '<dt>'.$trainers[$indice]['cognome']. " ".$trainers[$indice]['nome']. '</dt>';
    $trainer .= '<dd class="cont_corso">';
     $trainer .= '<img class= "allenatoreImg" src="img/allenatori/'.$trainers[$indice]['img']. '"' . ' alt="foto allenatore ' .$trainers[$indice]['cognome']. " ".$trainers[$indice]['nome']. '"/>';
    $trainer .= '<p xml:lang="en">Email:</p><a class="contactTrainer" href="mailto:' . $trainers[$indice]['email'] .'">'. $trainers[$indice]['email'] .'</a>';
    $trainer .=  '</dd>';
    $trainer .= '</dl>';


  }
  //var_dump(allCourses);
  $page = str_replace("*allenatori*", $trainer, $page);
}

echo $page;
?>