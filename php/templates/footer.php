/* da aggiornare 
  *bottonetotop* con il suo codice html
  *script* con le inclusioni dei vari file js
  */
<?php
$footer = file_get_contents(dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "html" . DIRECTORY_SEPARATOR . "templates" . DIRECTORY_SEPARATOR . "footer.html");
echo $footer;
?>