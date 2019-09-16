<?php

if(!isset($_SESSION)){
  session_start();
}


require_once "./../../php/database/database.php";
require_once "./../../php/tools/validator.php";
//require_once("./admin_panel.php");
//echo "Ciao";
use Database\Database;
use Validator\Validator;

$database = new Database();
//$page = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "modificaCorsi.html");




if (isset($_SESSION["autorizzato"]) &&  $_SESSION["autorizzato"]==1){
  require_once ("../templates/backend_template/backend_head.php");
if ($database) {
  $page = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "modificaCorsi.html");

  //echo $_POST['nome'];
 //$idCorso = Database::getIdCorso($_GET['nomeCorso'],$_GET['livello'], $_GET['oraInizio'],$_GET['prezzo'],$_GET['tipo'],$_GET['desc']);
 $idOrario = Database::getIdOrario($_GET['nomeCorso']);
 // $update = Database::updateCorsi($_GET['nomeCorso'],$_GET['livello'], $_GET['oraInizio'],$_GET['prezzo'],$_GET['tipo'],$_GET['desc']);

 //$idCorso=Database::getIdCorso($_POST['nome']);  //,$idCorso[0]['idCorso']
 //var_dump($idCorso);
 //var_dump($idOrario);

if(isset($_POST)& !empty($_POST)){
 echo "post è false";
  $page = str_replace("*nome*", "", $page);
  $page = str_replace("*livello*", "", $page);
  $page = str_replace("*inizio*", "", $page);
  $page = str_replace("*fine*", "", $page);
  $page = str_replace("*giorno*", "", $page);
  $page = str_replace("*prezzo*", "", $page);
  $page = str_replace("*tipo*", "", $page);
  $page = str_replace("*desc*", "", $page);
}else{
 


  $page = str_replace("*nome*", $_GET['nomeCorso'], $page);
  $page = str_replace("*livello*", $_GET['livello'], $page);
  $page = str_replace("*inizio*", $_GET['oraInizio'], $page);
  $page = str_replace("*fine*", $_GET['oraFine'], $page);
  $page = str_replace("*giorno*", $_GET['giorno'], $page);
  $page = str_replace("*prezzo*", $_GET['prezzo'], $page);
  $page = str_replace("*tipo*", $_GET['tipo'], $page);
  $page = str_replace("*desc*", $_GET['desc'], $page);
  $page = str_replace("*idCorso*", $_GET['idCorso'], $page);



  

  //$course.='<li class="grey"><a href="modificaCorsi.php></a></li>';
 

}
require_once ("../templates/backend_template/backend_head.php");
echo $page;

}else{
  header('Location: admin_login.php');
}
}