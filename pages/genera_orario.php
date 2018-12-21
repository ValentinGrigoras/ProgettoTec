<?php  //----FUNCTIONS-----

//PRE=($conn connessione valida)
function CorsoGiornoOra($conn, $oraInizio, $oraFine, $giorno){
   	$sql= "SELECT Corsi.nome AS Corso, oraI, oraF, Allenatore.nome AS Allenatore, stanza, giorno
        		FROM Orario, Corsi, Allenatore
        		WHERE Orario.idCorso=Corsi.idCorso AND Orario.idAllenatore=Allenatore.idAllenatore
              	AND oraI>='".$oraInizio.":00' AND oraF<='".$oraFine.":00' AND giorno='".$giorno."';";
    $result=mysqli_query($conn, $sql);
    if (!$result) return 0;
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    return $row;
}
//POST=(Restituisci un array contente nome, orario, allenatore e sala del corso del giorno $giorno tra le ore $oraInizio-$oraFine)

//PRE=($conn connessione valida)
function corsiFasciaOraria($conn, $oraInizio, $oraFine){
	$sql= "SELECT Corsi.nome as Corso
        		FROM Orario, Corsi
        		WHERE Orario.idCorso=Corsi.idCorso
              	AND oraI>='".$oraInizio.":00' AND oraF<='".$oraFine.":00';";
    $result=mysqli_query($conn, $sql);
    if (!$result) return 0;
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    return isset($row["Corso"]);
}
//POST=(restituisce TRUE se ci sono corsi nella fascia orario $oraInizio-$oraFine, FALSE altrimenti)

//----END FUNCTIONS----?> 



<?php 
include_once("../templates/head.php");
include_once("../templates/header.php");
?>

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
	echo "Connected successfully"; ?>
<div id="programma">
	<div id="programmazioneCorsiContent" class="maxWidth">
		<h2 id="titoloOrario"> Programmazione dei corsi </h2>
		
		<div id="OrarioContent">
			<div id="custom_select">
					<label for="seleziona_corso"> Seleziona Corso: </label>
					<select id="seleziona_corso">
						<option value="0"> Tutti </option>
						<option value="1">AllenamentoPosturale</option>
						<option value="2">BallaBrucia</option>
						<option value="3">BodyStability</option>
						<option value="4">CardioBoxe</option>
						<option value="5">CardioClass</option>
						<option value="6">CorpoLibero</option>
						<option value="7">FatKiller</option>
						<option value="8">GAG</option>
						<option value="9">IntervalTraining</option>
						<option value="10">Pilates</option>
						<option value="11">PowerPump</option>
						<option value="12">PowerTone</option>
						<option value="13">TotalBody</option>
						<option value="14">StepTone</option>
						<option value="15">Strong</option>
						<option value="16">UpperBody</option>
						<option value="17">YogaFlex</option>
						<option value="18">Zumba</option>
					</select>
			</div> <!--end custom_select-->

			<div id="TimeTable" class="maxWidth">
			<table id="TimeTableItem">
				<thead>
				<tr>
					<th><span class="TimeTableHead">Ora / Giorno</span></th>
					<th><span class="TimeTableDay">Lunedì</span></th>
					<th><span class="TimeTableDay">Martedì</span></th>
					<th><span class="TimeTableDay">Mercoledì</span></th>
					<th><span class="TimeTableDay">Giovedì</span></th>
					<th><span class="TimeTableDay">Venerdì</span></th>
					<th><span class="TimeTableDay">Sabato</span></th>
				</tr>
				</thead>
				<tbody>
  <?php  
	$giorno=array("1"=>"Lun", "2"=>"Mar", "3"=>"Mer", "4"=>"Gio", "5"=>"Ven", "6"=>"Sab");
	$tr=7;
	while( $tr<=21){
	  if (corsiFasciaOraria($conn,$tr,$tr+1)){ 
		echo "<tr>";
		echo "<td class=\"TimeTableEntryTimeHolder\">
				<div class=\"TimeTableEntryTime\">
					<div class=\"TimeTableFrom\"><span>".$tr.":00</span></div>
					<div class=\"TimeTableSeparator\"><span> - </span></div>
					<div class=\"TimeTableTo\"><span>".($tr+1).":00</span></div>
				</div>
			  </td>";

		$td_giorni=1;
		while($td_giorni<=6){

			$data=CorsoGiornoOra($conn,$tr,$tr+1,$giorno[$td_giorni]);

    		echo "<td>";
    		if (isset($data["Corso"])){
				echo "<div class=\"TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso1\">
						<div class=\"TimeTableEntryColor\"></div>
						<a href=\"http://solarisfitness.it/classes-item/pilates/\" class=\"TimeTableEntryName AltFontCharacter\">".$data["Corso"]."</a>
						<div class=\"TimeTableEntryTimePeriod\">
							<div class=\"TimeTableFrom\"><span>".$data["oraI"]."</span></div>
							<div class=\"TimeTableSeparator\"><span> - </span></div>
							<div class=\"TimeTableTo\"><span>".$data["oraF"]."</span></div>
						</div>
						<a href=\"http://solarisfitness.it/trainer-item/sabrina/\" class=\"TimeTableEntryTrainer\">".$data["Allenatore"]."</a>
						<p class=\"TimeTableEntryRoom\">".$data["stanza"]."</p>
					  </div>";
			}
			echo "</td>";

    		$td_giorni++;
    	}
	echo "</tr>";
  }
  $tr++;
}
?>			
							

</tbody>
</table>
</div>






<?php include_once("../templates/footer.php");?>

<?php mysqli_close($conn);?>