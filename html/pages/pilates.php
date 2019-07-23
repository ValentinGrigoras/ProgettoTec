
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="it" xml:lang="it" xmlns="http://www.w3.org/1999/xhtml">

<head>
<!--specifica il charset-->
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<!--specifica il titolo-->
<title>JustFit</title>
<!--specifica il titolo per esteso-->
<meta name="title" content="JustFit - Sempre in forma"/>
<!--breve descrizione del sito-->


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"/>
<link rel="stylesheet" href="../../css/style.css" media="handheld, screen, only screen"  type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Arima+Madurai:300,400,700" rel="stylesheet"/>
<link rel="stylesheet" href="../../css/tablet_landscape.css" media="handheld, screen and (max-width:1060px), only screen and (max-device-width:1060px)"  type="text/css"/>
<link rel="stylesheet" href="../../css/tablet_portrait.css" media="handheld, screen and (max-width:768px), only screen and (max-device-width:768px)"  type="text/css"/>
<link rel="stylesheet" href="../../css/phone_landscape.css" media="handheld, screen and (max-width:600px), only screen and (max-device-width:600px)"  type="text/css"/>
<link rel="stylesheet" href="../../css/phone_portrait.css" media="handheld, screen and (max-width:480px), only screen and (max-device-width:480px)"  type="text/css"/>
<link rel="stylesheet" href="../../css/small_phone.css" media="handheld, screen and (max-width:320px), only screen and (max-device-width:320px)"  type="text/css"/>
<link type="text/css" rel="stylesheet" href="style/print_style.css" media="print"/>
</head>


<body>
 <?php include_once "../templates/header.php"; ?>
<div id="content_about_us">
 <div id="paragrafi">
     <p>Solaris Fitness offre soluzioni d’allenamento in grado di rispondere ad ogni esigenza. </p>
     <p>Propone numerosi corsi di gruppo, dalle classi dedicate ai giovani alle attività rivolte a persone di terza età. </p>
     <p>Per l’allenamento individuale dispone di una sala fitness di oltre 350 mq. con attrezzature  cardiovascolari e isotoniche di ultima generazione, oltre ad una zona adibita ad allenamento a  corpo libero. </p>
     <p>Se desideri allenarti al fianco di un personal trainer, un nostro specialista del fitness ti seguirà, consigliandoti esercizi specifici in relazione al tuo stato di forma, per raggiungere l’obiettivo. </p>
     <p>Gli ambienti ampi e luminosi sono progettati per trasmettere  energia positiva durante l’allenamento. </p>
 </div>
<?php
// Directory
$directory = "../../img/pilates";

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
             <img src=\"../../img/pilates/$files[$i]\" >
             <div class=\"text\">Caption Text</div>
               </div>";

           $i++;
     }
 ?>
<!-- Next and previous buttons -->
     <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
     <a class="next" onclick="plusSlides(1)">&#10095;</a>
 </div>
</div>
<?php include_once "../templates/footer.php"; ?>
<script src="../../js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="../../js/slideshow.js" type="text/javascript"></script>

</body>
</html>
