<?php 
require_once "./../../php/database/database.php";
require_once "./../../php/tools/validator.php";

echo "Ciao";
use Database\Database;
use Validator\Validator;

$database = new Database();
$page = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "admin_panel.html");
$head = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "templates" . '/'. "backend_head" .'/' . "backend_head.html");

if ($database) {



 // $uid = $_SESSION['username'];
 /*
if (!Database::get_session()){
  echo"hi";
   header("location:login.php");
}
*/

}



//require_once "./../templates/backend_template/backend_head.php";
echo $head;
echo $page;
?>