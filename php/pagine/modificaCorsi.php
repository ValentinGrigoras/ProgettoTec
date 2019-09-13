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




if (isset($_SESSION["autorizzato"]) &&  $_SESSION["autorizzato"]==1){
  require_once ("../templates/backend_template/backend_head.php");
if ($database) {
  $page = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "modificaCorsi.html");
  $courses = Database::selectCourses();

}
require_once ("../templates/backend_template/backend_head.php");
echo $page;

}else{
  header('Location: admin_login.php');
}
