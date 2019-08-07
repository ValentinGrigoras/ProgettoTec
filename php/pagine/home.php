<?php
$error_notFound = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "home.html");
echo $error_notFound;
?>