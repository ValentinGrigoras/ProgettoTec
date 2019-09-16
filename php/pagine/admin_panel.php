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

 // visualizzare gli utenti registrati
 $viewUser = Database::viewUtenti();
 //var_dump($user);
if(isset($viewUser)){

$user = "";
  for($indice = 0;$indice<count($viewUser); $indice++){
    $user.='<div class="viewUser">';
    $user.='<ul class="user">';
    $user.='<li class="header">Cognome: '.$viewUser[$indice]['cognome'].'</li>';
    $user.='<li class="header">Nome: '.$viewUser[$indice]['nome'].'</li>';
    $user.='<li class="grey">Data di nascita: '.$viewUser[$indice]['dataDiNascita'] .'</li>';
    $user.='<li>Email: '.$viewUser[$indice]['email'].'</li>';
    $user.='<li>Telefono: '.$viewUser[$indice]['tel'].'</li>';
    $user.=' </ul>';
    $user.='</div>'; 
}
$page=str_replace("*utenti*",$user,$page);
}
//$viewUser = Database::viewUtenti();


$viewAdmin = Database::viewAdmin();
//var_dump($viewAdmin);
if(isset($viewAdmin)){

$admin = "";
 for($indice = 0;$indice<count($viewAdmin); $indice++){
   $admin.='<div class="viewAdmin">';
   $admin.='<ul class="admin">';
   $admin.='<li>Email: '.$viewAdmin[$indice]['email'].'</li>';
   $admin.=' </ul>';
   $admin.='</div>'; 
}


$page=str_replace("*admin*",$admin,$page);
}
  echo $page;

 
}else{
  header('Location: admin_login.php');
}

?>
