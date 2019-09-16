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
$page = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "modificaCorsi.html");


$selectCorso=Database::getCorsiById($_POST['id']);
var_dump($selectCorso);
if(isset($_POST['submit'])){

//var_dump($_POST);
//var_dump($selectCorso);

$page = str_replace("*nome*",$selectCorso[0]['nome'] , $page);
$page = str_replace("*livello*", $selectCorso[0]['livello'], $page);
$page = str_replace("*inizio*", $selectCorso[0]['oraI'], $page);
$page = str_replace("*fine*",$selectCorso[0]['oraF'], $page);
$page = str_replace("*giorno*", $selectCorso[0]['giorno'], $page);
$page = str_replace("*durata*", $selectCorso[0]['durata'], $page);
$page = str_replace("*tipo*",$selectCorso[0]['categoria'], $page);
$page = str_replace("*desc*", $selectCorso[0]['descrizione'], $page);
//$page = str_replace("*idCorso*", $_POST['idCorso'], $page);

$updateCorsi=Database::updateCorsi($_POST['id'],$_POST['nome'],$_POST['livello'],
$_POST['durata'],$_POST['descrizione'],$_POST['categoria']
);

if($updateCorsi){
  header('Location: viewcorsi.php');
}

}


if (isset($_SESSION["autorizzato"]) &&  $_SESSION["autorizzato"]==1){
  require_once ("../templates/backend_template/backend_head.php");
if ($database) {
  //$page = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "modificaCorsi.html");

}
require_once ("../templates/backend_template/backend_head.php");
echo $page;

}else{
  header('Location: admin_login.php');
}
