<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "exemploconexao";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);
	
	//Checar a conexao
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		echo "Conexao realizada com sucesso";
	}
	

?>