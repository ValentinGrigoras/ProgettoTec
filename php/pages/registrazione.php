
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
				<form id="signup_form">
					<h2> Crea il tuo account personale </h2>
					<p>I campi con (*) sono obbligatori.</p>
					<fieldset>
                        <legend>Account</legend>
                        <div>
                            <div class="required">
                                <label for="email" class="input_label ">Email</label>
                                <input tabindex="*tabindexemail*" type="text" name="email" id="email" maxlength="20" *disabled* />
                            </div>
                            <p class="form_note">Inserire l'<span xml:lang="en">email</span> nel formato casella@dominio.</p>
                            <p hidden="true">*erroremail*</p>
                        </div>
                        <div>
                            <div class="required">
                                <label for="password" class="input_label ">Password</label>
                                <input tabindex="*tabindexpassword*" type="password" name="password" id="password"  maxlength="20" *disabled*/>
                            </div>
                            <p class="form_note">Inserire la password scelta.</p>
                            <p hidden="true">*errorpassword*</p>

                            <div class="required">
                                <label for="confermapassword" class="input_label ">Conferma password</label>
                                <input tabindex="*tabindexconfermapassword*" type="password" name="confermapassword" id="confermapassword"  maxlength="20" *disabled*/>
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
                                <input tabindex="*tabindexnome*" type="text" name="nome" id="nome"  maxlength="20" *disabled* />
                            </div>
                            <p class="form_note">Inserire il nome senza spazi e con sole lettere alfabetiche.</p>
                            
                            <p hidden="true">*errorenome*</p>
                        </div>
                        <div>
                            <div class="required">
                                <label for="cognome" class="input_label required ">Cognome</label>
                                <input tabindex="*tabindexcognome*" type="text" name="cognome" id="cognome" maxlength="20" *disabled*/>
                            </div>
                            <p class="form_note">Inserire il cognome senza spazi e con sole lettere alfabetiche.</p>
                            
                            <p hidden="true">*errorcognome*</p>
                        </div>
                        <div>
                            <div class="required">
                                <label for="datanascita" class="input_label ">Data di nascita</label>
                                <input tabindex="*tabindexdatanascita*" type="text" name="datanascita" id="datanascita" maxlength="50" *disabled*/>
                            </div>
                            <p class="form_note">Inserire la data di nascita rispettando il formato gg/mm/aaaa.</p>
                            <p hidden="true">*errordatanascita*</p>
                        </div>
                        <div>
                            <div class="required">
                                <label for="cf" class="input_label ">Codice fiscale</label>
                                <input tabindex="*tabindexcodicf*" type="text" name="cf" id="cf"  maxlength="50" *disabled*/>
                            </div>
							<p class="form_note">Inserire il codice fiscale.</p>
                            <p hidden="true">*errorecf*</p>
                        </div>
                        <div>
                            <div>
                                <label for="telefono" class="input_label">Telefono</label>
                                <input tabindex="*tabindextelefono*" type="text" name="telefono" id="telefono" maxlength="15" *disabled*/>
                            </div>
                            <p class="form_note">Inserire il numero di telefono con sole cifre, senza spazi.</p>
                            <p hidden="true">*errortelefono*</p>
                        </div>
                        
                    </fieldset>
                    <fieldset>
                        <legend>Dati relativi all'abitazione</legend>
                        <div>
                            <div>
                                <label for="stato" class="input_label">Stato</label>
                                <select tabindex="*tabindexstato*" name="stato" id="stato" *disabled*>
                                    *stato*
                                </select>
                            </div>
                            <p hidden="true">*errorstato*</p>
                        </div>
                        <div>
                            <div>
                                <label for="indirizzo" class="input_label"> Indirizzo</label>
                                <input tabindex="*tabindexindirizzo*" type="text" name="indirizzo" id="indirizzo"  *disabled*/>
                            </div>
                            <p class="form_note"> Inserire l'indirizzo con il nome della via e il numero civico.</p>
                            <p hidden="true">*errorindirizzo*</p>
                        </div>
                        <div>
                            <div>
                                <label for="comune" class="input_label">Comune</label>
                                <input tabindex="*tabindexcomune*" type="text" name="comune" id="comune"  maxlength="20" *disabled*/>
                            </div>
                            <p class="form_note">Inserire il comune senza spazi e con sole lettere alfabetiche.</p>
                            <p hidden="true">*errorcomune*</p>
                        </div>
                         <div>
                            <div>
                                <label for="provincia" class="input_label">Provincia</label>
                                <input tabindex="*tabindexprovincia*" type="text" name="provincia" id="provincia"  maxlength="20" *disabled*/>
                            </div>
                            <p class="form_note">Inserire la provincia senza spazi e con sole lettere alfabetiche.</p>
                            <p hidden="true">*errorprovincia*</p>
                        </div>
                    </fieldset>
                    <p class="form_note">Facendo clic su "Crea account" di seguito, accetti i nostri Termini di servizio e l'Informativa sulla privacy. Occasionalmente ti invieremo e-mail relative all'account.</p>
                    <button id="signup_button" type="submit" *disabled*>Crea account</button>
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

<!-- ------------------------------------------------------ -->
   <?php include_once "../templates/footer.php"; ?>
   </div>
<script src="../js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="../js/slideshow.js" type="text/javascript"></script>
</div>
</body>
</html>
