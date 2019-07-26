<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="it" xml:lang="it" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php include_once "../templates/head.php"; ?>
</head>


<body>
<div id="main_container">
	<?php include_once "../templates/header.php"; ?>
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
						<tr>
							<td class="TimeTableEntryTimeHolder">
								<div class="TimeTableEntryTime">
									<div class="TimeTableFrom"><span>07:00</span></div>
									<div class="TimeTableSeparator"><span> - </span></div>
									<div class="TimeTableTo"><span>08:00</span></div>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso1">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/pilates/" class="TimeTableEntryName AltFontCharacter">Pilates</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>07:15</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>08:00</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/sabrina/" class="TimeTableEntryTrainer">Sabrina</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td></td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso3">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/total-body/" class="TimeTableEntryName AltFontCharacter">Total Body</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>07:15</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>08:00</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/alessandro/" class="TimeTableEntryTrainer">Alessandro</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="TimeTableEntryTimeHolder">
								<div class="TimeTableEntryTime">
									<div class="TimeTableFrom"><span>09:00</span></div>
									<div class="TimeTableSeparator"><span> - </span></div>
									<div class="TimeTableTo"><span>10:00</span></div>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso2">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/corpo-libero/" class="TimeTableEntryName AltFontCharacter">Corpo Libero</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>09:30</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>10:30</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/gaia/" class="TimeTableEntryTrainer">Gaia</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso1">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/yoga-flex/" class="TimeTableEntryName AltFontCharacter">Yoga-flex</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>09:00</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>10:00</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/beatrice/" class="TimeTableEntryTrainer">Beatrice</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso2">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/corpo-libero/" class="TimeTableEntryName AltFontCharacter">Corpo Libero</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>09:30</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>10:30</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/gaia/" class="TimeTableEntryTrainer">Gaia</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso1">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/yoga-flex/" class="TimeTableEntryName AltFontCharacter">Yoga-flex</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>09:00</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>10:00</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/beatrice/" class="TimeTableEntryTrainer">Beatrice</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="TimeTableEntryTimeHolder">
								<div class="TimeTableEntryTime">
									<div class="TimeTableFrom"><span>10:00</span></div>
									<div class="TimeTableSeparator"><span> - </span></div>
									<div class="TimeTableTo"><span>11:00</span></div>
								</div>
							</td>
							<td></td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso1">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/allenamento-posturale/" class="TimeTableEntryName AltFontCharacter">Allenamento Posturale</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>10:30</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>11:30</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/silvia/" class="TimeTableEntryTrainer">Silvia</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td></td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso1">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/allenamento-posturale/" class="TimeTableEntryName AltFontCharacter">Allenamento Posturale</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>10:30</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>11:30</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/silvia/" class="TimeTableEntryTrainer">Silvia</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td></td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso1">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/pilates/" class="TimeTableEntryName AltFontCharacter">Pilates</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>10:30</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>11:15</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/solaris/" class="TimeTableEntryTrainer">A rotazione</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
						</tr>
						<tr>
							<td class="TimeTableEntryTimeHolder">
								<div class="TimeTableEntryTime">
									<div class="TimeTableFrom"><span>11:00</span></div>
									<div class="TimeTableSeparator"><span> - </span></div>
									<div class="TimeTableTo"><span>12:00</span></div>
								</div>
							</td>
							<td></td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso3">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/interval-training/" class="TimeTableEntryName AltFontCharacter">Interval training</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>11:00</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>11:30</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/mattia-c/" class="TimeTableEntryTrainer">Mattia C.</a>
									<p class="TimeTableEntryRoom">Functional zone</p>
								</div>
							</td>
							<td></td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso3 ">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/interval-training/" class="TimeTableEntryName AltFontCharacter">Interval training</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>11:00</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>11:30</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/mattia-c/" class="TimeTableEntryTrainer">Mattia C.</a>
									<p class="TimeTableEntryRoom">Functional zone</p>
								</div>
							</td>
							<td></td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso3">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/total-body/" class="TimeTableEntryName AltFontCharacter">Total Body</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>11:15</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>12:00</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/solaris/" class="TimeTableEntryTrainer">A rotazione</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
						</tr>
						<tr>
							<td class="TimeTableEntryTimeHolder">
								<div class="TimeTableEntryTime">
									<div class="TimeTableFrom"><span>12:00</span></div>
									<div class="TimeTableSeparator"><span> - </span></div>
									<div class="TimeTableTo"><span>13:00</span></div>
								</div>
							</td>
							<td></td>
							<td></td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso3">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/cardio-class/" class="TimeTableEntryName AltFontCharacter">Cardio Class</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>12:30</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>13:00</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/irene/" class="TimeTableEntryTrainer">Irene</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td></td>
							<td></td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso3">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/power-pump/" class="TimeTableEntryName AltFontCharacter">Power Pump</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>12:00</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>12:45</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/solaris/" class="TimeTableEntryTrainer">A rotazione</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
						</tr>
						<tr>
							<td class="TimeTableEntryTimeHolder">
								<div class="TimeTableEntryTime">
									<div class="TimeTableFrom"><span>13:00</span></div>
									<div class="TimeTableSeparator"><span> - </span></div>
									<div class="TimeTableTo"><span>14:00</span></div>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso4">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/step-tone/" class="TimeTableEntryName AltFontCharacter">Step Tone</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>13:00</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>13:50</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/sabrina/" class="TimeTableEntryTrainer">Sabrina</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso3">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/body-stability/" class="TimeTableEntryName AltFontCharacter">Body Stability</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>13:05</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>13:50</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/mattia-c/" class="TimeTableEntryTrainer">Mattia C.</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso3">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/upper-body/" class="TimeTableEntryName AltFontCharacter">Upper Body</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>13:00</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>13:30</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/irene/" class="TimeTableEntryTrainer">Irene</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso4">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/g-a-g/" class="TimeTableEntryName AltFontCharacter">G.A.G.</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>13:30</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>14:00</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/irene/" class="TimeTableEntryTrainer">Irene</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso1">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/pilates/" class="TimeTableEntryName AltFontCharacter">Pilates</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>13:05</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>13:50</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/sabrina/" class="TimeTableEntryTrainer">Sabrina</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso4">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/g-a-g/" class="TimeTableEntryName AltFontCharacter">G.A.G.</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>13:00</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>13:50</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/simona/" class="TimeTableEntryTrainer">Simona</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td></td>
						</tr>
							<tr>
								<td class="TimeTableEntryTimeHolder">
									<div class="TimeTableEntryTime">
										<div class="TimeTableFrom"><span>18:00</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>19:00</span></div>
									</div>
								</td>
								<td>
									<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso3">
										<div class="TimeTableEntryColor"></div>
										<a href="http://solarisfitness.it/classes-item/power-tone/" class="TimeTableEntryName AltFontCharacter">Power Tone</a>
										<div class="TimeTableEntryTimePeriod">
											<div class="TimeTableFrom"><span>18:00</span></div>
											<div class="TimeTableSeparator"><span> - </span></div>
											<div class="TimeTableTo"><span>18:45</span></div>
										</div>
										<a href="http://solarisfitness.it/trainer-item/laura/" class="TimeTableEntryTrainer">Laura</a>
										<p class="TimeTableEntryRoom">Sala corsi</p>
									</div>
									<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso6">
										<div class="TimeTableEntryColor"></div>
										<a href="http://solarisfitness.it/classes-item/zumba/" class="TimeTableEntryName AltFontCharacter">Zumba</a>
										<div class="TimeTableEntryTimePeriod">
											<div class="TimeTableFrom"><span>18:45</span></div>
											<div class="TimeTableSeparator"><span> - </span></div>
											<div class="TimeTableTo"><span>19:30</span></div>
										</div>
										<a href="http://solarisfitness.it/trainer-item/laura/" class="TimeTableEntryTrainer">Laura</a>
										<p class="TimeTableEntryRoom">Sala corsi</p>
									</div>
								</td>
								<td>
									<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso2">
										<div class="TimeTableEntryColor"></div>
										<a href="http://solarisfitness.it/classes-item/corpo-libero/" class="TimeTableEntryName AltFontCharacter">Corpo Libero</a>
										<div class="TimeTableEntryTimePeriod">
											<div class="TimeTableFrom"><span>18:00</span></div>
											<div class="TimeTableSeparator"><span> - </span></div>
											<div class="TimeTableTo"><span>18:45</span></div>
										</div>
										<a href="http://solarisfitness.it/trainer-item/patrizia/" class="TimeTableEntryTrainer">Patrizia</a>
										<p class="TimeTableEntryRoom">Sala corsi</p>
									</div>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso1">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/pilates/" class="TimeTableEntryName AltFontCharacter">Pilates</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>18:45</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>19:30</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/sonia/" class="TimeTableEntryTrainer">Sonia</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso1">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/pilates/" class="TimeTableEntryName AltFontCharacter">Pilates</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>18:00</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>18:45</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/lorena/" class="TimeTableEntryTrainer">Lorena</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso3">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/strong/" class="TimeTableEntryName AltFontCharacter">Strong</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>18:45</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>19:30</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/lorena/" class="TimeTableEntryTrainer">Lorena</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso2">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/corpo-libero/" class="TimeTableEntryName AltFontCharacter">Corpo Libero</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>18:00</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>18:45</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/patrizia/" class="TimeTableEntryTrainer">Patrizia</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso3">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/power-pump/" class="TimeTableEntryName AltFontCharacter">Power Pump</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>18:45</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>19:30</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/sonia/" class="TimeTableEntryTrainer">Sonia</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso1">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/allenamento-posturale/" class="TimeTableEntryName AltFontCharacter">Allenamento Posturale</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>18:00</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>18:45</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/ilenia-v/" class="TimeTableEntryTrainer">Ilenia V.</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso3">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/power-tone/" class="TimeTableEntryName AltFontCharacter">Power Tone</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>18:45</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>19:30</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/ilenia-v/" class="TimeTableEntryTrainer">Ilenia V.</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td></td>
						</tr>
						<tr>
							<td class="TimeTableEntryTimeHolder">
								<div class="TimeTableEntryTime">
									<div class="TimeTableFrom"><span>19:00</span></div>
									<div class="TimeTableSeparator"><span> - </span></div>
									<div class="TimeTableTo"><span>20:00</span></div>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso3">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/total-body/" class="TimeTableEntryName AltFontCharacter">Total Body</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>19:30</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>20:15</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/laura/" class="TimeTableEntryTrainer">Laura</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso5">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/fat-killer/" class="TimeTableEntryName AltFontCharacter">Fat Killer</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>19:30</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>20:15</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/sonia/" class="TimeTableEntryTrainer">Sonia</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso3">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/total-body/" class="TimeTableEntryName AltFontCharacter">Total Body</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>19:30</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>20:15</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/ilenia/" class="TimeTableEntryTrainer">Ilenia</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso5">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/fat-killer/" class="TimeTableEntryName AltFontCharacter">Fat Killer</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>19:30</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>20:15</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/sonia/" class="TimeTableEntryTrainer">Sonia</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso1">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/pilates/" class="TimeTableEntryName AltFontCharacter">Pilates</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>19:30</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>20:15</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/lorena/" class="TimeTableEntryTrainer">Lorena</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td></td>
						</tr>
						<tr>
							<td class="TimeTableEntryTimeHolder">
								<div class="TimeTableEntryTime">
									<div class="TimeTableFrom"><span>20:00</span></div>
									<div class="TimeTableSeparator"><span> - </span></div>
									<div class="TimeTableTo"><span>21:00</span></div>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso1">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/pilates/" class="TimeTableEntryName AltFontCharacter">Pilates</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>20:15</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>21:00</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/laura/" class="TimeTableEntryTrainer">Laura</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso3">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/cardio-boxe/" class="TimeTableEntryName AltFontCharacter">Cardio boxe</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>20:15</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>21:00</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/mattia-c/" class="TimeTableEntryTrainer">Mattia C.</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso4">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/g-a-g/" class="TimeTableEntryName AltFontCharacter">G.A.G.</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>20:15</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>21:00</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/ilenia/" class="TimeTableEntryTrainer">Ilenia</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso3">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/cardio-boxe/" class="TimeTableEntryName AltFontCharacter">Cardio boxe</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>20:15</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>21:00</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/mattia-c/" class="TimeTableEntryTrainer">Mattia C.</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso3">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/strong/" class="TimeTableEntryName AltFontCharacter">Strong</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>20:15</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>21:00</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/lorena/" class="TimeTableEntryTrainer">Lorena</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td></td>
						</tr>
						<tr>
							<td class="TimeTableEntryTimeHolder">
								<div class="TimeTableEntryTime">
									<div class="TimeTableFrom"><span>21:00</span></div>
									<div class="TimeTableSeparator"><span> - </span></div>
									<div class="TimeTableTo"><span>22:00</span></div>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso3">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/strong/" class="TimeTableEntryName AltFontCharacter">Strong</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>21:00</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>21:45</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/solaris/" class="TimeTableEntryTrainer">A rotazione</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso1">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/yoga-flex/" class="TimeTableEntryName AltFontCharacter">Yoga-flex</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>21:00</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>21:45</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/beatrice/" class="TimeTableEntryTrainer">Beatrice</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td>
								<div class="TimeTableFitnessEntry TimeTableFitnessEntryClass cat_corso6">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/balla-e-brucia/" class="TimeTableEntryName AltFontCharacter">Balla-Brucia</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>21:00</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>21:30</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/ilenia/" class="TimeTableEntryTrainer">Ilenia</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td>
								<div class="cat_corso1 TimeTableFitnessEntry TimeTableFitnessEntryClass ">
									<div class="TimeTableEntryColor"></div>
									<a href="http://solarisfitness.it/classes-item/yoga-flex/" class="TimeTableEntryName AltFontCharacter">Yoga-flex</a>
									<div class="TimeTableEntryTimePeriod">
										<div class="TimeTableFrom"><span>21:00</span></div>
										<div class="TimeTableSeparator"><span> - </span></div>
										<div class="TimeTableTo"><span>21:45</span></div>
									</div>
									<a href="http://solarisfitness.it/trainer-item/beatrice/" class="TimeTableEntryTrainer">Beatrice</a>
									<p class="TimeTableEntryRoom">Sala corsi</p>
								</div>
							</td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div id="MobileTimeTable">
				<ul>
					<li class="MobileTimeTableItem">
						<div class="MobileTimeTableHeadline clearfix">
							<h3>Luned&igrave;</h3>
						</div>
						<ul class="MobileTimeTableDaylyPlan">
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/pilates/" class="linkcat_corso1" >Pilates</a>
								</div>
								<div class="MobileTimeTableClassTime">07:15 - 08:00</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/corpo-libero/" class="MobileTimeTableClass">
									Corpo Libero</a>
								</div>
								<div class="MobileTimeTableClassTime">09:30 - 10:30</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/step-tone/" class="linkcat_corso4">Step Tone</a>
								</div>
								<div class="MobileTimeTableClassTime">13:00 - 13:50</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/power-tone/" class="MobileTimeTableClass">Power Tone</a>
								</div>
								<div class="MobileTimeTableClassTime">18:00 - 18:45</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/zumba/" class="MobileTimeTableClass">Zumba</a>
								</div>
								<div class="MobileTimeTableClassTime">18:45 - 19:30</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/total-body/" class="linkcat_corso3">Total Body</a>
								</div>
								<div class="MobileTimeTableClassTime">19:30 - 20:15</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/pilates/" class="linkcat_corso1">Pilates</a>
								</div>
								<div class="MobileTimeTableClassTime">20:15 - 21:00</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/strong/" class="MobileTimeTableClass">Strong</a>
								</div>
								<div class="MobileTimeTableClassTime">21:00 - 21:45</div>
							</li>
						</ul>
					</li>
					<li class="MobileTimeTableItem">
						<div class="MobileTimeTableHeadline clearfix">
							<h3>Marted&igrave;</h3>
						</div>
						<ul class="MobileTimeTableDaylyPlan">
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/yoga-flex/" class="linkcat_corso1">Yoga-flex</a>
								</div>
								<div class="MobileTimeTableClassTime">09:00 - 10:00</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/allenamento-posturale/" class="MobileTimeTableClass">Allenamento Posturale</a>
								</div>
								<div class="MobileTimeTableClassTime">10:30 - 11:30</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/interval-training/" class="MobileTimeTableClass">Interval training</a>
								</div>
								<div class="MobileTimeTableClassTime">11:00 - 11:30</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/body-stability/" class="MobileTimeTableClass">Body Stability</a>
								</div>
								<div class="MobileTimeTableClassTime">13:05 - 13:50</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/corpo-libero/" class="linkcat_corso2">Corpo Libero</a>
								</div>
								<div class="MobileTimeTableClassTime">18:00 - 18:45</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/pilates/" class="linkcat_corso1">Pilates</a>
								</div>
								<div class="MobileTimeTableClassTime">18:45 - 19:30</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/fat-killer/" class="MobileTimeTableClass">Fat Killer</a>
								</div>
								<div class="MobileTimeTableClassTime">19:30 - 20:15</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/cardio-boxe/" class="MobileTimeTableClass">Cardio boxe</a>
								</div>
								<div class="MobileTimeTableClassTime">20:15 - 21:00</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/yoga-flex/" class="linkcat_corso1">Yoga-flex</a>
								</div>
								<div class="MobileTimeTableClassTime">21:00 - 21:45</div>
							</li>
						</ul>
					</li>
					<li class="MobileTimeTableItem">
						<div class="MobileTimeTableHeadline clearfix">
							<h3>Mercoled&igrave;</h3>
						</div>
						<ul class="MobileTimeTableDaylyPlan">
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/total-body/" class="linkcat_corso3">Total Body</a>
								</div>
								<div class="MobileTimeTableClassTime">07:15 - 08:00</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/corpo-libero/" class="linkcat_corso2">Corpo Libero</a>
								</div>
								<div class="MobileTimeTableClassTime">09:30 - 10:30</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/cardio-class/" class="MobileTimeTableClass">Cardio Class</a>
								</div>
								<div class="MobileTimeTableClassTime">12:30 - 13:00</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/upper-body/" class="MobileTimeTableClass">Upper Body</a>
								</div>
								<div class="MobileTimeTableClassTime">13:00 - 13:30</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/g-a-g/" class="MobileTimeTableClass">G.A.G.</a>
								</div>
								<div class="MobileTimeTableClassTime">13:30 - 14:00</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/pilates/" class="linkcat_corso1">Pilates</a>
								</div>
								<div class="MobileTimeTableClassTime">18:00 - 18:45</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/strong/" class="MobileTimeTableClass">Strong</a>
								</div>
								<div class="MobileTimeTableClassTime">18:45 - 19:30</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/total-body/" class="linkcat_corso3">Total Body</a>
								</div>
								<div class="MobileTimeTableClassTime">19:30 - 20:15</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/g-a-g/" class="MobileTimeTableClass">G.A.G.</a>
								</div>
								<div class="MobileTimeTableClassTime">20:15 - 21:00</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/balla-e-brucia/" class="MobileTimeTableClass">Balla-Brucia</a>
								</div>
								<div class="MobileTimeTableClassTime">21:00 - 21:30</div>
							</li>
						</ul>
					</li>
					<li class="MobileTimeTableItem">
						<div class="MobileTimeTableHeadline clearfix">
							<h3>Gioved&igrave;</h3>
						</div>
						<ul class="MobileTimeTableDaylyPlan">
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/yoga-flex/" class="linkcat_corso1">Yoga-flex</a>
								</div>
								<div class="MobileTimeTableClassTime">09:00 - 10:00</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/allenamento-posturale/" class="MobileTimeTableClass">Allenamento Posturale</a>
								</div>
								<div class="MobileTimeTableClassTime">10:30 - 11:30</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/interval-training/" class="MobileTimeTableClass">Interval training</a>
								</div>
								<div class="MobileTimeTableClassTime">11:00 - 11:30</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/pilates/" class="linkcat_corso1">Pilates</a>
								</div>
								<div class="MobileTimeTableClassTime">13:05 - 13:50</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/corpo-libero/" class="linkcat_corso2">Corpo Libero</a>
								</div>
								<div class="MobileTimeTableClassTime">18:00 - 18:45</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/power-pump/" class="MobileTimeTableClass">Power Pump</a>
								</div>
								<div class="MobileTimeTableClassTime">18:45 - 19:30</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/fat-killer/" class="MobileTimeTableClass">Fat Killer</a>
								</div>
								<div class="MobileTimeTableClassTime">19:30 - 20:15</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/cardio-boxe/" class="MobileTimeTableClass">Cardio boxe</a>
								</div>
								<div class="MobileTimeTableClassTime">20:15 - 21:00</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/yoga-flex/" class="linkcat_corso1">Yoga-flex</a>
								</div>
								<div class="MobileTimeTableClassTime">21:00 - 21:45</div>
							</li>
						</ul>
					</li>
					<li class="MobileTimeTableItem">
						<div class="MobileTimeTableHeadline clearfix">
							<h3>Venerd&igrave;</h3>
						</div>
						<ul class="MobileTimeTableDaylyPlan">
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/g-a-g/" class="MobileTimeTableClass">G.A.G.</a>
								</div>
								<div class="MobileTimeTableClassTime">13:00 - 13:50</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/allenamento-posturale/" class="MobileTimeTableClass">Allenamento Posturale</a>
								</div>
								<div class="MobileTimeTableClassTime">18:00 - 18:45</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/power-tone/" class="MobileTimeTableClass">Power Tone</a>
								</div>
								<div class="MobileTimeTableClassTime">18:45 - 19:30</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/pilates/" class="linkcat_corso1">Pilates</a>
								</div>
								<div class="MobileTimeTableClassTime">19:30 - 20:15</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/strong/" class="MobileTimeTableClass">Strong</a>
								</div>
								<div class="MobileTimeTableClassTime">20:15 - 21:00</div>
							</li>
						</ul>
					</li>
					<li class="MobileTimeTableItem">
						<div class="MobileTimeTableHeadline clearfix">
							<h3>Sabato</h3>
						</div>
						<ul class="MobileTimeTableDaylyPlan">
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/pilates/" class="linkcat_corso1">Pilates</a>
								</div>
								<div class="MobileTimeTableClassTime">10:30 - 11:15</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/total-body/" class="linkcat_corso3">Total Body</a>
								</div>
								<div class="MobileTimeTableClassTime">11:15 - 12:00</div>
							</li>
							<li class="MobileTimeTableDaylyPlanTime">
								<div class="MobileTimeTableClassName">
									<a href="http://solarisfitness.it/classes-item/power-pump/" class="MobileTimeTableClass">Power Pump</a>
								</div>
								<div class="MobileTimeTableClassTime">12:00 - 12:45</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div> <!--end content-->
	</div> <!--end programmazioneCorsiContent-->
</div> <!--end programma-->
</div>
   <?php include_once "../templates/footer.php"; ?>
<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>

</body>
</html>