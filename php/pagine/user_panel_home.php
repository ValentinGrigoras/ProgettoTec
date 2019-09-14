<?php
require_once "./../../php/database/database.php";
require_once "./../../php/tools/validator.php";

use Database\Database;
use Validator\Validator;
$database = new Database();

if ($database) {

$page = file_get_contents(dirname(dirname(__DIR__)).'/'."php".'/'."pagine".'/'."user_panel_home.html");


?>