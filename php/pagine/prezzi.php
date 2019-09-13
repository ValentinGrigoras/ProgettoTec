<?php 
require_once "./../../php/database/database.php";
require_once "./../../php/tools/validator.php";

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
    $price .= '<img class= "allenatoreImg" src="css/img/abbonamenti/'.$prices[$indice]['nomeImg']. '"' . ' alt="immagine ' . $prices[$indice]['tipoAbbonamento'] . '"/>';
    $price .= '<p class="prezzoAbbonamento">&euro;' . $prices[$indice]['prezzo'].'</p>';
    $price .= '<p>' .$prices[$indice]['descrizione'] .'</p>';
    $price .=  '</dd>';
    $price .= '</dl>';


  }
$page = str_replace("*abbonamenti*", $price, $page);
  $page = str_replace("*linkregistrati*","<a class='btn' href='./registrazione'>Registrati</a>",$page);
  
}

echo $page;
?>