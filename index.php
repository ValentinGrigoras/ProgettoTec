
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="it" xml:lang="it" xmlns="http://www.w3.org/1999/xhtml">

<head>
<!--specifica il charset-->
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<!--specifica il titolo-->
<title>AimFit</title>
<!--specifica il titolo per esteso-->
<meta name="title" content="AimFit - Sempre in forma"/>
<!--breve descrizione del sito-->
 <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"/>
<link rel="stylesheet" href="css/style.css" media="handheld, screen, only screen"  type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300" rel="stylesheet"/> 
 <link rel="stylesheet" href="css/tablet_landscape.css" media="handheld, screen and (max-width:1060px), only screen and (max-device-width:1060px)"  type="text/css"/>
 <link rel="stylesheet" href="css/tablet_portrait.css" media="handheld, screen and (max-width:768px), only screen and (max-device-width:768px)"  type="text/css"/>
 <link rel="stylesheet" href="css/phone_landscape.css" media="handheld, screen and (max-width:600px), only screen and (max-device-width:600px)"  type="text/css"/>
 <link rel="stylesheet" href="css/phone_portrait.css" media="handheld, screen and (max-width:480px), only screen and (max-device-width:480px)"  type="text/css"/>
 <link rel="stylesheet" href="css/small_phone.css" media="handheld, screen and (max-width:320px), only screen and (max-device-width:320px)"  type="text/css"/>
 <link type="text/css" rel="stylesheet" href="style/print_style.css" media="print"/>
 <script src="js/gototop.js" type="text/javascript"></script>
 <script src="js/show_menu.js" type="text/javascript"></script>
  <script src="js/map_show.js" type="text/javascript"></script>

</head>

<body>	
  <!--MENU (Valentin)-->
  <div id="header">
    <div class="logo_mobile">
          <img src="css/img/logo4.png" alt="Logo AimFit"/>
    </div>
  
  <div id="first-section-header">
    <div class="maxWidth">
      <div id="breadcrumbs_home">
        <ul class="breadcrumb">
          <li><span>Ti trovi in: </span></li>
          <li id="first"><a href="#"> Home </a></li>
          <li class="arrow_bread"><i class="fas fa-angle-double-right"></i></li>
          <li id="first"><a href="#"> Home </a></li>
          <li class="arrow_bread"><i class="fas fa-angle-double-right"></i></li>
          <li id="first"><a href="#"> Home </a></li>
          <li class="arrow_bread"><i class="fas fa-angle-double-right"></i></li>
          <li>Italy</li>
        </ul>
      <div class="logo">
        <img id="desktop" src="css/img/logo_text.png" alt="Logo AimFit"/>
      </div>
  </div>
  <div class="lingua">
      <div>
        <label for="select_lingua" class="label_lingua">Lingua del sito</label>
        <select id="select_lingua">
          <option value="1">Italiano</option>
          <option value="2">English</option>
        </select>
        </div>
      </div>
      <span onclick="openNav()" id="botton_menu">&#9776;Menu</span>
    </div>
  </div>
<!-- The overlay -->
<div id="myNav" class="overlay">
  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <!-- Overlay content -->
  <div class="overlay-content">
    <ul class="cd-accordion-menu animated">
      <li class="has-children"><a href="index.html">Home</a></li>
      <li class="has-children" id="acordion_group">
      <input type="checkbox" name ="group-1" id="group-1" checked>
      <label for="group-1" >Su di noi  &#8600;</label>
      <ul>
        <li><a href="pages/su_di_noi.php">Chi Siamo</a></li>
        <li><a href="#0">FAQ</a></li>
        <li><a href="#0">Lavora con noi</a></li>
        <li><a href="#0">Galleria Foto</a></li>
        <li><a href="#0">Allenatori</a></li>
      </ul>
    </li>
    <li class="has-children"><a href="index.html">Corsi</a></li>
    <li class="has-children"><a href="index.html">Programma</a></li>
    <li class="has-children"><a href="index.html">Prezzi</a></li>
    <li class="has-children"><a href="index.html">Contattaci</a></li>
    <li class="has-children"><a href="index.html">Registrati</a></li>
    <li class="has-children"><a href="index.html">Login</a></li>

    </ul> <!-- cd-accordion-menu -->
  </div>

</div>

<!-- Use any element to open/show the overlay navigation menu -->

  </div> <!-- END HEADER -->
  <div id="landing">
    <div id="main_nav">
      <div class="maxWidth">
      <div id="nav">
        <ul>
          <li id="active_link">Home</li>
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Su di noi<i class="fas fa-sort-down"></i> </a>
              <div class="dropdown-content">
                  <a href="#">Chi siamo</a>
                  <a href="#">FAQ</a>
                  <a href="#">Lavora con noi</a>
                  <a href="#">Galleria foto</a>
                  <a href="#">Allenatori</a>
              </div>
          </li>
          <li><a href="">Corsi</a></li>
          <li><a href="pages/programmazione_corsi.php">Programma</a></li>
          <li><a href="">Prezzi</a></li>
          <li><a href="">Contattaci</a></li>
          <li><a href="">Registrati</a></li>
          <li><a href="">Login</a></li>
        </ul>
      </div>
      </div>

  </div> <!--end main_nav--> 
  <p id="main_message">SHAPE YOUR 
    PERFECT BODY</p>
  <p id="second_message">Tremblant is based in Canada and has over 90 runs servicing millions of skiers each year. With 13 state-of-the-art ski lifts and a selection of choices for both snowboarders and skiers</p>
  <p class="buttonPrezzi"><a href="#">Iscriviti</a></p>

</div>
<div id="allenatori_section">
	<div id="allenatori_content">
  		<h2>I nostri allenatori</h2>
		<dl class="allenatore">
  			<dt>Dimitri Vegas</dt>
  			<dd class="allen1">
  				<img src="css/img/erik-lucatero-310633-unsplash.jpg" alt="allenatore pluto"/>
  				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
  				<ul class="socials_links">
      				<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
      				<li><a href=""><i class="fab fa-youtube"></i></a></li>
      				<li><a href=""><i class="fab fa-instagram"></i></a></li>
      				<li><a href=""><i class="fab fa-twitter"></i></a></li>
    			</ul>
  			</dd>
		</dl>

		<dl class="allenatore">
			<dt>Dimitri Vegas</dt>
			<dd class="allen1">
				<img src="css/img/erik-lucatero-310633-unsplash.jpg" alt="allenatore pluto"/>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
				<ul class="socials_links">
  					<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
  					<li><a href=""><i class="fab fa-youtube"></i></a></li>
  					<li><a href=""><i class="fab fa-instagram"></i></a></li>
  					<li><a href=""><i class="fab fa-twitter"></i></a></li>
				</ul>
			</dd>
		</dl>

		<dl class="allenatore">
			<dt>Like Mike</dt>
			<dd class="allen1">
				<img src="css/img/erik-lucatero-310633-unsplash.jpg" alt="allenatore pluto"/>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
				<ul class="socials_links">
  					<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
  					<li><a href=""><i class="fab fa-youtube"></i></a></li>
  					<li><a href=""><i class="fab fa-instagram"></i></a></li>
  					<li><a href=""><i class="fab fa-twitter"></i></a></li>
				</ul>
			</dd>
		</dl>

		<dl class="allenatore">
			<dt>Dimitri Vegas</dt>
			<dd class="allen1">
				<img src="css/img/erik-lucatero-310633-unsplash.jpg" alt="allenatore pluto"/>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
				<ul class="socials_links">
  					<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
  					<li><a href=""><i class="fab fa-youtube"></i></a></li>
  					<li><a href=""><i class="fab fa-instagram"></i></a></li>
  					<li><a href=""><i class="fab fa-twitter"></i></a></li>
				</ul>
			</dd>
		</dl>
	</div> <!--end allenatori content-->
</div> <!--end allenatori section-->
<!--
  ABBONAMENTI
-->
<div id="prezzi_section">
  <div id="content_prezzi">
  <h2>Abbonamenti</h2>

  <dl class="Abbonamento">
    <dt>Annuale</dt>
    <dd class="cont_abbonamento">
		<img src="css/img/prezzi_mensile.jpg" alt="immagine prezzo abbonamento anuale"/>
		<p class="prezzoAbbonamento">&euro;360<span class="nrMese"> / un anno</span></p>
		<p>7 giorni a settimana</p>
		<p>1 scheda mensile</p>
		<p>Piscina inclusa</p>
		<p class="buttonPrezzi"><a href="#">Iscriviti</a></p>
    </dd>
  </dl>

  <dl class="Abbonamento">
    <dt>Trimestrale</dt>
    <dd class="cont_abbonamento">
		<img src="css/img/prezzi_trimestrale.jpg" alt="immagine prezzo abbonamento trimestrale" />
		<p class="prezzoAbbonamento">&euro;120<span class="nrMese"> / tre mesi</span></p>
		<p>7 giorni a settimana</p>
		<p>1 scheda mensile</p>
		<p>Piscina inclusa</p>
		<p class="buttonPrezzi"><a href="#">Iscriviti</a></p>
    </dd>
  </dl>

  <dl class="Abbonamento">
    <dt>Mensile</dt>
    <dd class="cont_abbonamento">
		<img src="css/img/prezzi_mensile1.jpg" alt="immagine prezzo abbonamento mensile" />
		<p class="prezzoAbbonamento">&euro;55<span class="nrMese"> / un mese</span></p>
		<p>6 giorni a settimana</p>
		<p>1 scheda mensile</p>
		<p>Piscina esclusa</p>
		<p class="buttonPrezzi"><a href="#">Iscriviti</a></p>
    </dd>
  </dl>

  </div>
</div>
<!--
  END ABBONAMENTI
-->

<!--
  CORSI
-->
<div id="corsi_section">
  <div id="content_corsi">
    <h2>I nostri CORSI</h2>

    <div class="corso">
      <img src="css/img/barbell.png" alt="icona corso pilates"/>
      <h3>Pilates</h3>
  		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  		<p class="buttonCorsi"><a href="#">Scopri</a></p>
    </div>

    <div class="corso">
      <img src="css/img/cardiogram.png" alt="icona corso pilates" />
      <h3>Pilates</h3>
  		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  		<p class="buttonCorsi"><a href="#">Scopri</a></p>
    </div>

    <div class="corso">
      <img src="css/img/treadmill.png" alt="icona corso pilates" />
      <h3>Pilates</h3>
  		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  		<p class="buttonCorsi"><a href="#">Scopri</a></p>
    </div>

  </div>
</div>




<!--
  END Corsi
-->

<!--
  FORM + MAP
-->
<div id="cont-form-map">
	<div id="container">
		<h2>Contattaci</h2>
		<form action="/action_page.php">
			<label for="fname">Nome</label>
			<input type="text" id="fname" name="firstname" />

			<label for="lname">Cognome</label>
			<input type="text" id="lname" name="lastname">

			<label for="field_email">La tua e-mail:</label>
			<input type="text" id="field_email" name="sender_email" >

			<label for="subject">Soggetto</label>
			<textarea type="text" id="subject" name="subject" ></textarea>

			<input type="submit" value="Submit">
		</form>
	</div>

	<div id="googleMap"></div>
</div>


<!--
  END FORM + MAP
-->


<!--
  FOOTER (Irina)
-->
  <?php include_once "templates/footer.php"; ?>
<!--
END FOOTER (Irina)
-->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0rh7lb9IlH8E4nMs1nffxwW8SL05LaHo&callback=myMap"></script>
<!--torna su (hoss)-->
<button onclick="topFunction()" id="tornasu" title="Torna su"><i class="fas fa-angle-double-up"></i></button>

</body>
</html>
