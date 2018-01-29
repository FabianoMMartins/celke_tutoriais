<?php
	$inauguracao = '1986-10-03 10:10:00';	
	$celke_timestamp1 = strtotime($inauguracao);
	echo $celke_timestamp1."<br>";
	
	$ano_lancamento_curso = '1982-08-03 10:10:00';
	$celke_timestamp2 = strtotime($ano_lancamento_curso);
	echo $celke_timestamp2."<br>";
	
	if($celke_timestamp1 <= $celke_timestamp2){
		echo "Data de lancamento he maior.";
	}else{
		echo "Data de lancamento he menor.";
	}
	
?>