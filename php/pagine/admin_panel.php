<?php 
require_once "./../../php/database/database.php";
require_once "./../../php/tools/validator.php";
echo "Ciao";
use Database\Database;
use Validator\Validator;

$database = new Database();
if ($database) {
  $page = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "admin_panel.html");

  $uid = $_SESSION['username'];
if (!Dadabase::get_session()){
   header("location:login.php");
}

}

echo $page;
?>