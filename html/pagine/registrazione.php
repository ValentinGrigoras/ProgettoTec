
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="it" xml:lang="it" xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php include_once "../templates/head.php"; ?>
</head>

<body>

<div id="main_container">
	<?php include_once "../templates/header.php"; ?>
<!-- ------------------------------------------------------ -->
<div>
	<div >
		<div id="intestazione">
			<h1> Unisciti a AIMFit </h1>
			<p> Offre soluzioni d’allenamento in grado di rispondere ad ogni esigenza! </p>
		</div>
		<div id="contenuto">
			<div id="dati">
				<form id="signup_form" action="" method="POST">
					<h2> Crea il tuo account personale </h2>
					<p>I campi con (*) sono obbligatori.</p>
					<fieldset>
                        <legend>Account</legend>
                        <div>
                            <div class="required">
                                <label for="email" class="input_label ">Email</label>
                                <input tabindex="*tabindexemail*" type="text" name="email" id="email" *disabled* />
                            </div>
                            <p class="form_note">Inserire l'<span xml:lang="en">email</span> nel formato casella@dominio.</p>
                            <p hidden="true">*erroremail*</p>
                        </div>
                        <div>
                            <div class="required">
                                <label for="password" class="input_label ">Password</label>
                                <input tabindex="*tabindexpassword*" type="password" name="password" id="password"  *disabled*/>
                            </div>
                            <p class="form_note">Inserire la password scelta.</p>
                            <p hidden="true">*errorpassword*</p>

                            <div class="required">
                                <label for="confermapassword" class="input_label ">Conferma password</label>
                                <input tabindex="*tabindexconfermapassword*" type="password" name="confermapassword" id="confermapassword"   *disabled*/>
                            </div>
                            <p class="form_note">Inserire nuovamente la password scelta.</p>
                            <p hidden="true">*errorconfermapassword*</p>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Dati personali</legend>
                        <div>
                            <div class="required">
                                <label for="nome" class="input_label ">Nome</label>
                                <input tabindex="*tabindexnome*" type="text" name="nome" id="nome" *disabled* />
                            </div>
                            <p class="form_note">Inserire il nome senza spazi e con sole lettere alfabetiche.</p>
                            
                            <p hidden="true">*errorenome*</p>
                        </div>
                        <div>
                            <div class="required">
                                <label for="cognome" class="input_label required ">Cognome</label>
                                <input tabindex="*tabindexcognome*" type="text" name="cognome" id="cognome" *disabled*/>
                            </div>
                            <p class="form_note">Inserire il cognome senza spazi e con sole lettere alfabetiche.</p>
                            
                            <p hidden="true">*errorcognome*</p>
                        </div>
                        <div>
                            <div class="required">
                                <label for="datanascita" class="input_label ">Data di nascita</label>
                                <input tabindex="*tabindexdatanascita*" type="text" name="datanascita" id="datanascita"  *disabled*/>
                            </div>
                            <p class="form_note">Inserire la data di nascita rispettando il formato gg/mm/aaaa.</p>
                            <p hidden="true">*errordatanascita*</p>
                        </div>
                        <div>
                            <div class="required">
                                <label for="cf" class="input_label ">Codice fiscale</label>
                                <input tabindex="*tabindexcodicf*" type="text" name="cf" id="cf"   *disabled*/>
                            </div>
							<p class="form_note">Inserire il codice fiscale.</p>
                            <p hidden="true">*errorecf*</p>
                        </div>
                        <div>
                            <div>
                                <label for="telefono" class="input_label">Telefono</label>
                                <input tabindex="*tabindextelefono*" type="text" name="telefono" id="telefono"  *disabled*/>
                            </div>
                            <p class="form_note">Inserire il numero di telefono con sole cifre, senza spazi.</p>
                            <p hidden="true">*errortelefono*</p>
                        </div>
                        
                    </fieldset>
                    <p class="form_note">Facendo clic su "Crea account" di seguito, accetti i nostri Termini di servizio e l'Informativa sulla privacy. Occasionalmente ti invieremo e-mail relative all'account.</p>
                    <button id="signup" type="submit" name="signup" value="signup">Crea account</button>
                    *confirm message*
				</form>
			</div>
			<div id="descrizione">
				<h2> Benefici </h2>
				<span class="hr"> </span>
				<ul>
					<li> Ottieni un abbonamento </li>
					<li> Aggiungi corsi </li>
					<li> Gestisci i costi </li>
				</ul>
			</div>
		</div>
	</div>
</div>
</div>
<?php /*
use Database/database;
$database = new Database();
echo 'mm';
if ($database) {
	echo 'pm0';
	$page = file_get_contents(dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "html" . DIRECTORY_SEPARATOR . "pagine" . DIRECTORY_SEPARATOR . "registrazione.php");
	if (isset($_POST['signup'])) {

            $user = Database::selectUser($_POST['email']);
            echo 'pm1';
            if (empty($user)) {
                $registeruser = Database::registerUser($_POST['email'], $_POST['password'], $_POST['nome'], $_POST['cognome'], $_POST['datanascita'], $_POST['cf'], $_POST['telefono'], $_POST['indirizzo'], $_POST['comune'], $_POST['prov'], $_POST['stato'], $_POST['newsletter']);
                echo 'pm2';
            }
            if (isset($registeruser) && $registeruser){
                $user = Database::selectUser($_POST['email']);
            	if (isset($user)) {
                $m = "<div class=\"confirm\"> <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">OK</span> <p> L\'account &egrave; stato creato. <p> </div>";
				str_replace('*confirm message*', $m, $page);
    			}
    			echo 'pm3';
			}
	}
}*/
?>
<!-- ------------------------------------------------------ -->
   <?php include_once "../templates/footer.php"; ?>
   
<script src="../js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="../js/slideshow.js" type="text/javascript"></script>
</div>
</body>
</html>
