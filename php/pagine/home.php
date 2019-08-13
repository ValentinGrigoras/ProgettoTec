<?php
$home = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "home.html");
$home = str_replace("*linkabbonamenti*","<a class='btn' href='./prezzi'>Scopri</a>",$home);
echo $home;
?>