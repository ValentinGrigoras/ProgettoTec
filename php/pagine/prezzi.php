<?php 
require_once "./../../php/database/database.php";
require_once "./../../php/tools/validator.php";
echo "Ciao";
use Database\Database;
use Validator\Validator;

$database = new Database();
if ($database) {
  $page = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "prezzi.html");
$prices = Database::selectPrices();

if(isset($prices))

$price = "";
  for($indice = 0;$indice<count($prices); $indice++){

    $price .= '<dl class="threeColumnsCard">';
    $price .= '<dt>'.$prices[$indice]['tipoAbbonamento'].'</dt>';
    $price .= '<dd>';
    $price .= '<img src="i./css/img/abbonamneti/"'.$prices[$indice]['nomeImg']. '"' . ' alt="immagine abbonamento ' . $prices[$indice]['tipoAbbonamento'] . '"/>';
    $price .= '<p class="prezzoAbbonamento">&euro;' . $prices[$indice]['prezzo'].'</p>';
    $price .= '<p>' .$prices[$indice]['descrizione'] .'</p>';
    $price .= '<p class="buttonPrezzi"><a href="registrazione.php">Iscriviti</a></p>';
    $price .=  '</dd>';
    $price .= '</dl>';


  }
  //var_dump(allCourses);
  $page = str_replace("*abbonamenti*", $price, $page);
}

echo $page;
?>