<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "funvildevendas";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
	$result_usuario = "SELECT * FROM usuarios WHERE id BETWEEN 1 AND 3";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	
	while($row_usuarios = mysqli_fetch_assoc($resultado_usuario)){
		echo "ID: " . $row_usuarios['id']. "<br>";
		echo "Nome: " . $row_usuarios['nome']. "<br>";
		echo "Email: " . $row_usuarios['email']. "<br><hr>";
	}
?>