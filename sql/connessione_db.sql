<?php
	$servername="localhost"; 
	$username="phpmyadmin";
	$password="gennaio11";
	$db="Palestra";

	//create connection
	$conn =mysqli_connect($servername,$username,$password,$db);

	//check connection
	if (!$conn)
	{ die("Connection failed: ".mysqli_connect_error());}
	echo "Connected successfully";

	$sql= "SELECT Corsi.nome AS Corso, oraI, oraF, Allenatore.nome AS Allenatore, stanza
        FROM Orario, Corsi, Allenatore
        WHERE Orario.idCorso=Corsi.idCorso AND Orario.idAllenatore=Allenatore.idAllenatore
              AND oraI>='7:00' AND oraF<='8:00';";
    $result=mysqli_query($conn, $sql);
    echo $result->num_rows;
    $n_rows=mysqli_num_rows($result);
    $rows=mysqli_fetch_all($result,MYSQLI_NUM);
    if (!$result) {
    	echo "Query failed";
    }else{
    	for ($x = 0; $x < $n_rows; $x++) {
  			echo $rows[$x][0]." - ".$rows[$x][1]." - ".$rows[$x][2]." - ".$rows[$x][3];  
  		}
    }
?>