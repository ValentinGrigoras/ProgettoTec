<?php

$backend_head = file_get_contents(dirname(dirname(dirname(__DIR__))).'/'."html".'/'."templates".'/'."backend_head".'/'."backend_head.html");

//echo"from backend head php";

echo  $backend_head;