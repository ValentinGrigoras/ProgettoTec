<?php 
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 }

 //var_dump($_SESSION);

require_once "./../../php/database/database.php";
require_once "./../../php/tools/validator.php";

use Database\Database;
use Validator\Validator;

$database = new Database();
$page = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "admin_panel.html");
//$logout=require_once('admin_logout.php');
 if (isset($_SESSION["autorizzato"]) &&  $_SESSION["autorizzato"]==1){
  require_once ("../templates/backend_template/backend_head.php");
 // echo'<a href="admin_logout.php">logout';
 $page = str_replace("*emailAdmin*",$_SESSION["cod"],$page);
  echo $page;
  
}else{
  header('Location: admin_login.php');
}

?>
