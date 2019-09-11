<?php

//$head = file_get_contents(dirname(dirname(__DIR__)).'/'."html".'/'."templates".'/'."head.html");



require_once "./../../php/database/database.php";
require_once "./../../php/tools/validator.php";
//require_once("./admin_panel.php");
//echo "Ciao";
use Database\Database;
use Validator\Validator;

$database = new Database();
$page = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "modificaCorsi.html");



if ($database) {
  $page = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "modificaCorsi.html");
$courses = Database::selectCourses();




}


require_once ("../templates/backend_template/backend_head.php");


echo $page;
