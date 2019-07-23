
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="it" xml:lang="it" xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php include_once "../templates/head.php"; ?>
</head>

<body>
	<?php include_once "../templates/header.php"; ?>
<!-- ------------------------------------------------------ -->
<div>
	<div id="contenuto">
		<div id="header">
			<h1> Unisciti a AIMFit </h1>
			<p> Offre soluzioni d’allenamento in grado di rispondere ad ogni esigenza! </p>
		</div>
		<div id="content">
			<div id="dati">
				<form id="signup_form">
					<h2> Crea il tuo account personale </h2>
					<p>I campi con (*) sono obbligatori.</p>
					<fieldset>
                        <legend>Account</legend>
                        <div class="container formfield">
                            <div class="col-4 col-xl-2">
                                <label for="nome">Email (*)</label>
                                <input tabindex="*tabindexemail*" type="text" name="email" id="email" size="12" maxlength="20" *disabled* />
                            </div>
                            <p class="col-4 col-xl-2">Inserire l'<span xml:lang="en">email</span> nel formato casella@dominio.</p>
                            *erroremail*
                        </div>
                        <div class="container formfield">
                            <div class="col-4 col-xl-2">
                                <label for="password">Password (*)</label>
                                <input tabindex="*tabindexpassword*" type="password" name="password" id="password" size="12" maxlength="20" *disabled*/>
                            </div>
                            <p class="col-4 col-xl-2">Inserire la password scelta.</p>
                            *errorpassword*
                            <div class="col-4 col-xl-2">
                                <label for="confermapassword">Conferma password (*)</label>
                                <input tabindex="*tabindexconfermapassword*" type="password" name="confermapassword" id="confermapassword" size="12" maxlength="20" *disabled*/>
                            </div>
                            <p class="col-4 col-xl-2">Inserire nuovamente la password scelta.</p>
                            *errorconfermapassword*
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Dati personali</legend>
                        <div class="container formfield">
                            <div class="col-4 col-xl-2">
                                <label for="nome">Nome (*)</label>
                                <input tabindex="*tabindexnome*" type="text" name="nome" id="nome" size="12" maxlength="20" *disabled* />
                            </div>
                            <p class="col-4 col-xl-2">Inserire il nome senza spazi e con sole lettere alfabetiche.</p>
                            *errorenome*
                        </div>
                        <div class="container formfield">
                            <div class="col-4 col-xl-2">
                                <label for="cognome">Cognome (*)</label>
                                <input tabindex="*tabindexcognome*" type="text" name="cognome" id="cognome" size="12" maxlength="20" *disabled*/>
                            </div>
                            <p class="col-4 col-xl-2">Inserire il cognome senza spazi e con sole lettere alfabetiche.</p>
                            *errorcognome*
                        </div>
                        <div class="container formfield">
                            <div class="col-4 container">
                                <div class="treColonne center">
                                    <label for="giornonascita">Giorno (*)</label>
                                    <select tabindex="*tabindexgiornonascita*" name="giornonascita" id="giornonascita" *disabled*>
                                        *giornonascita*
                                    </select>
                                </div>
                                <div class="treColonne center">
                                    <label for="mesenascita">Mese (*)</label>
                                    <select tabindex="*tabindexmesenascita*" name="mesenascita" id="mesenascita" *disabled*>
                                        *mesenascita*
                                    </select>

                                </div>
                                <div class="treColonne center">
                                    <label for="annonascita">Anno (*)</label>
                                    <select tabindex="*tabindexannonascita*" name="annonascita" id="annonascita" *disabled*>
                                        *annonascita*
                                    </select>

                                </div>
                            </div>
                            *errordatanascita*
                        </div>
                        <div class="container formfield">
                            <div class="col-4 col-xl-2">
                                <label for="email"><span xml:lang="en">Codice fiscale</span> (*)</label>
                                <input tabindex="*tabindexcodicf*" type="text" name="cf" id="cf" size="23" maxlength="50" *disabled*/>
                            </div>
							<p class="col-4 col-xl-2">Inserire il codice fiscale.</p>
                            *erroremail*
                        </div>
                        <div class="container formfield">
                            <div class="col-4 col-xl-2">
                                <label for="telefono">Telefono (*)</label>
                                <input tabindex="*tabindextelefono*" type="text" name="telefono" id="telefono" size="15" maxlength="15" *disabled*/>
                            </div>
                            <p class="col-4 col-xl-2">Inserire il numero di telefono con sole cifre, senza spazi.</p>
                            *errortelefono*
                        </div>
                        
                    </fieldset>
                    <fieldset>
                        <legend>Dati relativi all'abitazione</legend>
                        <div class="container formfield">
                            <div class="col-4">
                                <label for="stato">Stato (*)</label>
                                <select tabindex="*tabindexstato*" name="stato" id="stato" *disabled*>
                                    *stato*
                                </select>
                            </div>
                            *errorstato*
                        </div>
                        <div class="container formfield">
                            <div class="col-4 col-xl-2">
                                <label for="indirizzo">Indirizzo (*)</label>
                                <input tabindex="*tabindexindirizzo*" type="text" name="indirizzo" id="indirizzo" size="20" *disabled*/>
                            </div>
                            <p class="col-4 col-xl-2">Inserire l'indirizzo con il nome della via e il numero civico.</p>
                            *errorindirizzo*
                        </div>
                        <div class="container formfield">
                            <div class="col-4 col-xl-2">
                                <label for="comune">Comune (*)</label>
                                <input tabindex="*tabindexcomune*" type="text" name="comune" id="comune" size="20" maxlength="20" *disabled*/>
                            </div>
                            <p class="col-4 col-xl-2">Inserire il comune senza spazi e con sole lettere alfabetiche.</p>
                            *errorcomune*
                        </div>
                         <div class="container formfield">
                            <div class="col-4 col-xl-2">
                                <label for="provincia">Provincia (*)</label>
                                <input tabindex="*tabindexprovincia*" type="text" name="provincia" id="provincia" size="20" maxlength="20" *disabled*/>
                            </div>
                            <p class="col-4 col-xl-2">Inserire la provincia senza spazi e con sole lettere alfabetiche.</p>
                            *errorprovincia*
                        </div>
                    </fieldset>
                    <p>Facendo clic su "Crea account" di seguito, accetti i nostri Termini di servizio e l'Informativa sulla privacy. Occasionalmente ti invieremo e-mail relative all'account.</p>
                    <button id="signup_button" type="submit" *disabled*>Crea account</button>
				</form>
			</div>
			<div id="descrizione">
				<h2> Benefici </h2>
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
<script src="../js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="../js/slideshow.js" type="text/javascript"></script>

</body>
</html>
