<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="it" xml:lang="it" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include_once "../templates/head.php"; ?>
</head>
<style>
    @media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
    background-color: brown;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>


<body>
    
<div class="sidebar">
<ul class="admin-ul">
    <li><a class="active">Nome admin</a></li>

    <li><a>Abbonamenti</a></li>

    <li><a>Lista prodotti</a></li>
            
    <li id="admin-logout"><a>Esci</a></li>
</ul>
</div>

<!--
<div class="topnavbar">
        <ul class="admin-ul">
               
            </ul>

-->
</body>

</html>