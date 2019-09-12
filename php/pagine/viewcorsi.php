<?php

//$head = file_get_contents(dirname(dirname(__DIR__)).'/'."html".'/'."templates".'/'."head.html");



require_once "./../../php/database/database.php";
require_once "./../../php/tools/validator.php";
//require_once("./admin_panel.php");
//echo "Ciao";
use Database\Database;
use Validator\Validator;

$database = new Database();
$page = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "viewcorsi.html");



if ($database) {
  $page = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "viewcorsi.html");
$courses = Database::selectCourses();
if(isset($courses))

$course = "";
  for($indice = 0;$indice<count($courses); $indice++){

    $course.=  '<div class="columns">';
    $course.= '<ul class="price">';
    $course.='<li class="header">'.$courses[$indice]['nome'].'</li>';
    $course.= '<li class="grey">'.$courses[$indice]['livello'] .'</li>';
    $course.=' <li>'.$courses[$indice]['costo'].' €</li>';
    $course.=' <li class="desc">'.$courses[$indice]['descrizione'].'</li>';
    $course.= '<li class="grey"><a href="#" class="button">Elimina</a></li>';
    $course.= '<li class="grey"><a href="modificaCorsi.php" class="button">Modifica</a></li>';
 ' </ul>';
 $course.='</div>';

/*
   $course.='<div class="row">';
   $course.='<div class="column">';
   $course.='<div class="card">';
   $course.='<h3>Nome: '.$courses[$indice]['nome'].'</h3>';
   $course.='<p>Livello: '.$courses[$indice]['livello'] .'</p>';
   $course.='<p>Livello: '.$courses[$indice]['descrizione'] .'</p>';
   $course.='<p><button>Aggiungi corso'.'</button></p>';
   $course.='<p><button>Elimina'.'</button></p>';
   $course.='</div>';
   $course.='</div>';
   $course.='</div>';

   */
   /*
   '<ul >' ;
   $course.='<li><h3>Nome:</h3> '.$courses[$indice]['nome'].'</li> ';
   $course.='<li>Livello: '. $courses[$indice]['livello'] .'</li>' ;
   $course.='<li>Descrizione: '. $courses[$indice]['descrizione']."</li> ";
   $course.='<li>Prezzo: '. $courses[$indice]['costo'].'</li>' ;
   '</ul>';
   */
   
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
?>
<style>

  /*
   ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 200px;
      background-color: #f1f1f1;
    }
    
   li  {
      display: block;
      color: #000;
      padding: 8px 16px;
      text-decoration: none;
    }
    
    li a.active {
      background-color: #4CAF50;
      color: white;
    }
    
    li a:hover:not(.active) {
      background-color: #555;
      color: white;
    }
    */
    </style>
