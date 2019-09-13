<?php

session_start();
$page = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "admin_panel.html");
$page = str_replace("*esci*",$logout,$page);
session_destroy();
header('Location: admin_login.php');
exit();
?>