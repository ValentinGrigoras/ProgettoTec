
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="it" xml:lang="it" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php include_once "../templates/head.php"; ?>
</head>


<body>
<div id="main_container">
	<?php include_once "../templates/header.php"; ?>
<div id="content_about_us">
	<div id="paragrafi">
		<p class="desc_about_us">Solaris Fitness offre soluzioni d’allenamento in grado di rispondere ad ogni esigenza. </p>Propone numerosi corsi di gruppo, dalle classi dedicate ai giovani alle attività rivolte a persone di terza età.
		Per l’allenamento individuale dispone di una sala fitness di oltre 350 mq. con attrezzature  cardiovascolari e isotoniche di ultima generazione, oltre ad una zona adibita ad allenamento a  corpo libero. 
		Se desideri allenarti al fianco di un personal trainer, un nostro specialista del fitness ti seguirà, consigliandoti esercizi specifici in relazione al tuo stato di forma, per raggiungere l’obiettivo. 
		Gli ambienti ampi e luminosi sono progettati per trasmettere  energia positiva durante l’allenamento. </p>
	</div>
<?php
// Directory
$directory = "../../img/about_us";

// Returns array of files
$files = scandir($directory);
unset($files[0]); unset($files[1]); //rimossi '.' e '..'

// Count number of files and store them to variable..
$num_files = count($files);
?>
<!-- Slideshow container -->
	<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
	<?php
		$i=2;
		while($i<=$num_files+1){
			echo "
				<div class=\"mySlides fade\">";
			$i-=1;
			echo "
    			<div class=\"numbertext\">$i / $num_files</div>" ;
    		$i+=1;
    		echo "
    			<img src=\"../../img/about_us/$files[$i]\" >
    			<div class=\"text\">Caption Text</div>
  				</div>";

  			$i++;
		}
	?>
  <!-- Next and previous buttons -->
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<div>
</div>
   <?php include_once "../templates/footer.php"; ?>
<script src="../../js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="../../js/slideshow.js" type="text/javascript"></script>

</body>
</html>