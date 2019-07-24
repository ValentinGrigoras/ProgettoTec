  <!--MENU (Valentin)-->
<?php
echo '  <!--MENU (Valentin)-->
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
      <li class="has-children"><a href="./../../index.html">Home</a></li>
      <li class="has-children" id="acordion_group">
      <input type="checkbox" name ="group-1" id="group-1" checked>
      <label for="group-1" >Su di noi  &#8600;</label>
      <ul>
        <li><a href="./../pagine/su_di_noi.php">Chi Siamo</a></li>
        <li><a href="#0">FAQ</a></li>
        <li><a href="#0">Lavora con noi</a></li>
        <li><a href="#0">Galleria Foto</a></li>
        <li><a href="#0">Allenatori</a></li>
      </ul>
    </li>
    <li class="has-children"><a href="./../pagine/corsi.php">Corsi</a></li>
    <li class="has-children"><a href="./../pagine/genera_orario.php">Programma</a></li>
    <li class="has-children"><a href="index.html">Prezzi</a></li>
    <li class="has-children"><a href="index.html">Contattaci</a></li>
    <li class="has-children"><a href="./../pagine/registrazione.php">Registrati</a></li>
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
                  <a href="./../pagine/su_di_noi.php">Chi siamo</a>
                  <a href="#">FAQ</a>
                  <a href="#">Lavora con noi</a>
                  <a href="#">Galleria foto</a>
                  <a href="#">Allenatori</a>
              </div>
          </li>
          <li><a href="./../pagine/corsi.php">Corsi</a></li>
          <li><a href="./../pagine/genera_orario.php">Programma</a></li>
          <li><a href="">Prezzi</a></li>
          <li><a href="">Contattaci</a></li>
          <li><a href="./../pagine/registrazione.php">Registrati</a></li>
          <li><a href="">Login</a></li>
        </ul>
      </div>
      </div>

  </div> <!--end main_nav--> '
?>
