<?php  
require_once "./../../php/database/database.php";
use Database\Database;
$database = new Database();
$page = file_get_contents(dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "html" . DIRECTORY_SEPARATOR . "pagine" . DIRECTORY_SEPARATOR . "programma.html");
//
//
//genera orario desktop
	$tabella="";
	$giorno=array("1"=>"Lun", "2"=>"Mar", "3"=>"Mer", "4"=>"Gio", "5"=>"Ven", "6"=>"Sab");
	$tr=7;
	while( $tr<=21){
	 	if (Database::corsiFasciaOraria($tr<10 ? "0".$tr : $tr)){ 
			$tabella.= "<tr>";
			$tabella.= "<td class=\"TimeTableEntryTimeHolder\">
				<div class=\"TimeTableEntryTime\">
					<div class=\"TimeTableFrom\"><span>".$tr.":00</span></div>
					<div class=\"TimeTableSeparator\"><span> - </span></div>
					<div class=\"TimeTableTo\"><span>".($tr+1).":00</span></div>
				</div>
			  </td>";

			$td_giorni=1;
			while($td_giorni<=6){

				$dati=Database::CorsoGiornoOra($giorno[$td_giorni],$tr<10 ? "0".$tr : $tr );

    			$tabella.= "<td>";
    			if (isset($dati[0])){
    				$i=0;
    				while ($i<count($dati)){
						$tabella.= "<div class=\"TimeTableFitnessEntry TimeTableFitnessEntryClass\">
						<div class=\"TimeTableEntryColor\"></div>
						<a href=\"http://solarisfitness.it/classes-item/pilates/\" class=\"TimeTableEntryName AltFontCharacter\">".$dati[$i]["Corso"]."</a>
						<div class=\"TimeTableEntryTimePeriod\">
							<div class=\"TimeTableFrom\"><span>".$dati[$i]["oraI"]."</span></div>
							<div class=\"TimeTableSeparator\"><span> - </span></div>
							<div class=\"TimeTableTo\"><span>".$dati[$i]["oraF"]."</span></div>
						</div>
						<a href=\"http://solarisfitness.it/trainer-item/sabrina/\" class=\"TimeTableEntryTrainer\">".$dati[$i]["Allenatore"]."</a>
						<p class=\"TimeTableEntryRoom\">".$dati[$i]["stanza"]."</p>
					  </div>";
						$i++;
					}
				}
				$tabella.= "</td>";

    			$td_giorni++;
    		}
			$tabella.= "</tr>";
  		}
  		$tr++;
	}//end while tr
	$page=str_replace('*generaorariodesktop*', $tabella , $page);
//
//
//genera orario mobile
	$orario="";
	$li_giorno=1;
	$giorno_stringaIntera=array("1"=>"Luned&igrave", "2"=>"Marted&igrave", "3"=>"Mercoled&igrave", "4"=>"Gioved&igrave", "5"=>"Venerd&igrave", "6"=>"Sabato");
	while ($li_giorno<=6){
		if (Database::corsiGiornata($giorno[$li_giorno])){
			$orario.= "<li class=\"MobileTimeTableItem\">"; //corsi del giorno
			$orario.= "<div class=\"MobileTimeTableHeadline\">
					<h3>".$giorno_stringaIntera[$li_giorno]."</h3>
			  	  </div>";
			$orario.= "<ul class=\"MobileTimeTableDaylyPlan\">";
			//inizio stampa corsi per fascia oraria
			$li_ora=7;
			while ($li_ora<=21){
				$dati=Database::CorsoGiornoOra($giorno[$li_giorno], $li_ora<10 ? "0".$li_ora : $li_ora);
				if (isset($dati[0])){
    				$i=0;
    				while ($i<count($dati)){
						$orario.= "<li class=\"MobileTimeTableDaylyPlanTime\">
							<div class=\"MobileTimeTableClassName\">
								<a href=\"http://solarisfitness.it/classes-item/pilates/\">".$dati[$i]["Corso"]."</a>
							</div>
							<div class=\"MobileTimeTableClassTime\">".$dati[$i]["oraI"]." - ".$dati[$i]["oraF"]."</div>
				  		  </li>";
				  		$i++;
					}
				}
				$li_ora++;
			}
			$orario.= "</ul>";
			$orario.= "</li>";
		}
		$li_giorno++;
	}//end while li giorno
	$page=str_replace('*generaorariomobile*', $orario , $page);


	echo $page;
?>			