<?php
	$servername="localhost"; 
	$username="irina";
	$password="Passwd.Math";
	$db="Palestra";

	//create connection
	$conn =mysqli_connect($servername,$username,$password,$db);

	//check connection
	if (!$conn) echo "connection error";
?>