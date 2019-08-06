<?php

$page = file_get_contents(dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "html" . DIRECTORY_SEPARATOR . "pagine" . DIRECTORY_SEPARATOR . "not_found.html");
$page = str_replace("*linkhome*","./",$page);
echo $page;
?>