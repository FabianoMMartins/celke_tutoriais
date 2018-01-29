<?php
	$date = '1986-10-03 10:30:00';
	echo "Data Inicio: ". $date."<br>";
	$celke_data_inicio = strtotime($date);
	echo "Data Inicio Timestamp: ".$celke_data_inicio."<br>";

	$celke_data_fim = strtotime('+2 day', $celke_data_inicio);
	echo "Data Fim Timestamp: ".$celke_data_fim."<br>";	
	echo "Data Fim formato Brasileiro: ".date('d/m/Y H:i:s', $celke_data_fim);
	
	$date = '1986-10-10 10:30:00';
	$celke_data_inicio = strtotime($date);

	$celke_data_fim = strtotime('-3 day', $celke_data_inicio);
	echo "<hr>Data Fim formato Brasileiro: ".date('d/m/Y H:i:s', $celke_data_fim);
?>