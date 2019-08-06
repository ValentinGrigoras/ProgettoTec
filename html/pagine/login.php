


<?php include_once "../templates/head.html"; ?>


<body>
	<div id="containe">
	<?php include_once "../templates/header.php"; ?>
<!-- ------------------------------------------------------ -->
<p>Inserisci i dati nel form per eseguire il nel sito.</p>

<form action="user_area.php?s=login&a=1" method="POST" class="form-content">
  <div class="form-row">
    <label for="username" lang="en" xml:lang="en"><span class="fa fa-user"></span> Username</label>
    <input class="form-input" type="text" name="username" id="username" placeholder="Inserisci lo username" required="required" />
  </div>

  <div class="form-row">
    <label for="password" lang="en" xml:lang="en"><span class="fa fa-lock"></span> Password</label>
    <input class="form-input" type="password" name="password" id="password" placeholder="Inserisci la password"  required="required" />
  </div>

  <div class="form-row">
    <button class="btn btn-primary" type="submit"><span class="fa fa-sign-in-alt"></span> Accedi</button>
    <button class="btn btn-reverse" type="reset"><span class="fa fa-redo-alt"></span> Resetta</button>
    <span class="register"><a href="registrazione.php?s=signup">Registrati!</a></span>
  </div>
</form>




<!-- ------------------------------------------------------ -->
   <?php include_once "../templates/footer.php"; ?>
<script src="../js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="../js/slideshow.js" type="text/javascript"></script>
</div>
</body>
</html>
