<?php
	$servername="localhost"; 
	$username="phpmyadmin";
	$password="gennaio11";
	$db="Palestra";

	//create connection
	$conn =mysqli_connect($servername,$username,$password,$db);

	//check connection
	if (!$conn) echo "connection error";
?>