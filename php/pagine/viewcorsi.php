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
    $nome=$courses[$indice]['nome'];
    $livello=$courses[$indice]['livello'];
    $costo=$courses[$indice]['costo']; 
    $tipo=$courses[$indice]['categoria'];
    $desc=$courses[$indice]['descrizione'];
    $oraInizio=$orari[$indice]['oraI'];
    $oraFine=$orari[$indice]['oraF'];
    $giorno=$orari[$indice]['giorno'];
    $idCorso=$courses[$indice]['idCorso'];
    //echo"idNome:".$nome;
    $course.='<div class="columns">';
    $course.='<ul class="price">';
    $course.='<li class="header">'.$courses[$indice]['nome'].'</li>';
    $course.='<li class="grey">'.$courses[$indice]['livello'] .'</li>';
    $course.='<li>'.$courses[$indice]['costo'].' €</li>';
    $course.='<li class="desc">'.$courses[$indice]['descrizione'].'</li>';
    $course.='<li class="grey"><a href="#" class="button">Elimina</a></li>';
    $course.='<li class="grey"><a href="modificaCorsi.php?idCorso='.$idCorso.'&&nomeCorso='.$nome.'&&livello='.$livello.'
    &&oraInizio='.$oraInizio.'&&prezzo='.$costo.'&&desc='.$desc.'&&tipo='.$tipo.'&&
    giorno='.$giorno.'&&
    oraFine='.$oraFine.'"class="button" value="modifica" name="modifica">Modifica</a></li>';
    $course.=' </ul>';
    $course.='</div>';


   
/*
    $course .= '<dl class="threeColumnsCard">';
    $course .= '<dt>'.$courses[$indice]['nome'].'</dt>';
    $course .= '<dd class="cont_corso">';
    $course .= '<img src="img/corsi/'.$courses[$indice]['nomeImg']. '"' . ' alt="immagine ' . $courses[$indice]['nome'] . '"/>';
    $course .= '<p class="livello_corso">Livello: ' . $courses[$indice]['livello'] .'</p>';
    $course .= '<p class="livello_corso">Durata sessione: ' . $courses[$indice]['durata'] . ' min'.'</p>';
    $course .= '<p class="livello_corso">Costo al mese : ' . $courses[$indice]['costo'] . ' &euro;' . '</p>';
    $course .= '<p class="desc_corso">' . $courses[$indice]['descrizione'] . '</p>';
    $course .=  '</dd>';
    $course .= '</dl>';

    */




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

