<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
//se non c'è la sessione registrata
if (!isset($_SESSION["autorizzato"])) {
  echo "<h1>Area riservata, accesso negato.</h1>";
  echo "Per effettuare il login clicca <a href='login'><font color='blue'>qui</font></a>";
  die;
}
else{
	echo "Benvenuto". $_SESSION['cod'];
}

?>