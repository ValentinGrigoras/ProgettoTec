  <!--MENU (Valentin)-->
<?php
echo '
   <div id="header">
    <div class="logo_mobile">
          <img src="../css/img/logo_text.png" alt="Logo JustFit"/>
      </div>
    <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

      <div class="overlay-content">
        <a href="#">Home</a>
        <a href="#">Su di noi</a>
        <li><a href="">Corsi</a></li>
        <li><a href="programmazione_corsi.html">Programma</a></li>
        <li><a href="">Prezzi</a></li>
        <li><a href="">Contattaci</a></li>
        <li><a href="">Registrati</a></li>
        <li><a href="">Login</a></li>
      </div>
      
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
          <img id="desktop" src="../css/img/logo_text.png" alt="Logo JustFit"/>
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
        <span onclick="openNav()" id="botton_menu">&#9776; Menu</span>
    </div>

  </div>
  </div> <!-- END HEADER -->
 ';/*if (index.php) echo' <div id="landing"'*/
echo'
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
          <li><a href="pages/programmazione_corsi.html">Programma</a></li>
          <li><a href="">Prezzi</a></li>
          <li><a href="">Contattaci</a></li>
          <li><a href="">Registrati</a></li>
          <li><a href="">Login</a></li>
        </ul>
      </div>
    </div>

  </div> <!--end main_nav--> 
  ';
  /*if (home) echo' </div>'*/
?>
