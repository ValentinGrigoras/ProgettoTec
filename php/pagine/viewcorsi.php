<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 }
//$head = file_get_contents(dirname(dirname(__DIR__)).'/'."html".'/'."templates".'/'."head.html");



require_once "./../../php/database/database.php";
require_once "./../../php/tools/validator.php";
//require_once("./admin_panel.php");
//echo "Ciao";
use Database\Database;
use Validator\Validator;

$database = new Database();
$page = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "viewcorsi.html");


if (isset($_SESSION["autorizzato"]) &&  $_SESSION["autorizzato"]==1){
  require_once ("../templates/backend_template/backend_head.php");
  

if ($database) {
  $page = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "viewcorsi.html");
$courses = Database::selectCourses();

$orari=Database::getIdOrario();
echo"id ora: ";


//var_dump($orari);

$course = "";
//$orario = "";
  for($indice = 0;$indice<count($courses); $indice++){
    $course.='<div class="columns">';
    $course.='<ul class="price">';
    $course.='<li class="header">'.$courses[$indice]['idCorso'].'</li>';
    $course.='<li class="header">'.$courses[$indice]['nome'].'</li>';
    $course.='<li class="grey">'.$courses[$indice]['livello'] .'</li>';
    $course.='<li class="desc">'.$courses[$indice]['descrizione'].'</li>';
    $course.='<li class="grey"><a href="#" class="button">Elimina</a></li>';
    $course.='<form id="modifyCourses_form" action="modificaCorsi.php" method="POST" ><button id="salva" type="submit" name="id" value="'.$courses[$indice]['idCorso'].'">Modifica</button></form>';
    $course.=' </ul>';
    $course.='</div>';
  }
  //var_dump(allCourses);
  $page = str_replace("*corsi*", $course, $page);
}
$courses = Database::selectCourses();


require_once ("../templates/backend_template/backend_head.php");


echo $page;

}else{
  header('Location: admin_login.php');
}
?>

