<?php  
//******************
//****FUNCTIONS*****
//******************
//PRE=($conn connessione valida)
function CorsoGiornoOra($conn, $giorno, $oraInizio){
   	$sql= "SELECT Corsi.nome AS Corso, TIME_FORMAT(oraI, '%H:%i') AS oraI, TIME_FORMAT(oraF, '%H:%i') AS oraF, Allenatore.nome AS Allenatore, stanza, giorno
        		FROM Orario, Corsi, Allenatore
        		WHERE Orario.idCorso=Corsi.idCorso AND Orario.idAllenatore=Allenatore.idAllenatore
              	AND oraI LIKE '".$oraInizio.":%%:%%' AND giorno='".$giorno."';";
    $result=mysqli_query($conn, $sql);
    if (!$result) return 0;
    $row=mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $row;
}
//POST=(Restituisci un array contente nome, orario, allenatore e sala del corso del giorno $giorno tra le ore $oraInizio-$oraFine)

//PRE=($conn connessione valida)
function corsiFasciaOraria($conn, $oraInizio){
	$sql= "SELECT idCorso
        		FROM Orario
        		WHERE oraI LIKE '".$oraInizio.":%%:%%';";
    $result=mysqli_query($conn, $sql);
    if (!$result) return 0;
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    return isset($row["idCorso"]);
}
//POST=(restituisce TRUE se ci sono corsi nella fascia orario $oraInizio-$oraFine, FALSE altrimenti)

//PRE=($conn connessione valida)
function corsiGiornata($conn, $giorno){
	$sql= "SELECT idCorso
        		FROM Orario
        		WHERE giorno='".$giorno."';";
    $result=mysqli_query($conn, $sql);
    if (!$result) return 0;
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    return isset($row["idCorso"]);
}
//POST=(restituisce TRUE se ci sono corsi nel girono $giorno, FALSE altrimenti)

//*********************
//****END FUNCTIONS****
//*********************
?> 



<?php 
include_once("../templates/head.php");
include_once("../templates/header.php");
include_once("connessioneDB.php");
?>


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
	  if (corsiFasciaOraria($conn,$tr<10 ? "0".$tr : $tr)){ 
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

			$dati=CorsoGiornoOra($conn,$giorno[$td_giorni],$tr<10 ? "0".$tr : $tr );

    		echo "<td>";
    		if (isset($dati[0])){
    			$i=0;
    			while ($i<count($dati)){
					echo "<div class=\"TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso1\">
						<div class=\"TimeTableEntryColor\"></div>
						<a href=\"http://solarisfitness.it/classes-item/pilates/\" class=\"TimeTableEntryName AltFontCharacter\">".$dati[$i]["Corso"]."</a>
						<div class=\"TimeTableEntryTimePeriod\">
							<div class=\"TimeTableFrom\"><span>".$dati[$i]["oraI"]."</span></div>
							<div class=\"TimeTableSeparator\"><span> - </span></div>
							<div class=\"TimeTableTo\"><span>".$dati[$i]["oraF"]."</span></div>
						</div>
						<a href=\"http://solarisfitness.it/trainer-item/sabrina/\" class=\"TimeTableEntryTrainer\">".$dati["Allenatore"]."</a>
						<p class=\"TimeTableEntryRoom\">".$dati[$i]["stanza"]."</p>
					  </div>";
					$i++;
				}
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
<div id="MobileTimeTable">
	<ul>
<?php 
	$li_giorno=1;
	$giorno_stringaIntera=array("1"=>"Luned&igrave", "2"=>"Marted&igrave", "3"=>"Mercoled&igrave", "4"=>"Gioved&igrave", "5"=>"Venerd&igrave", "6"=>"Sabato");
	while ($li_giorno<=6){
		if (corsiGiornata($conn, $giorno[$li_giorno])){
			echo "<li class=\"MobileTimeTableItem\">"; //corsi del giorno
			echo "<div class=\"MobileTimeTableHeadline\">
					<h3>".$giorno_stringaIntera[$li_giorno]."</h3>
			  	  </div>";
			echo "<ul class=\"MobileTimeTableDaylyPlan\">";
			//inizio stampa corsi per fascia oraria
			$li_ora=7;
			while ($li_ora<=21){
				$dati=CorsoGiornoOra($conn, $giorno[$li_giorno], $li_ora<10 ? "0".$li_ora : $li_ora);
				if (isset($dati[0])){
    				$i=0;
    				while ($i<count($dati)){
						echo "<li class=\"MobileTimeTableDaylyPlanTime\">
							<div class=\"MobileTimeTableClassName\">
								<a href=\"http://solarisfitness.it/classes-item/pilates/\" class=\"linkcat_corso1\" >".$dati[$i]["Corso"]."</a>
							</div>
							<div class=\"MobileTimeTableClassTime\">".$dati[$i]["oraI"]." - ".$dati[$i]["oraF"]."</div>
				  		  </li>";
				  		$i++;
					}
				}
				$li_ora++;
			}
			echo "</ul>";
			echo "</li>";
		}
		$li_giorno++;
	}
?>
	</ul>
</div>
</div> <!--end content-->
</div> <!--end programmazioneCorsiContent-->
</div> <!--end programma-->



<?php mysqli_close($conn);?>

<?php include_once("../templates/footer.php");?>

