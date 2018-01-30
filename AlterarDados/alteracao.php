<?php

	$nome_usuario = $_POST['nome_usuario'];

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "funildevendas";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	//$nome_usuario = "Kelly";
	
	$result_usuario = "UPDATE usuarios SET nome = '$nome_usuario' WHERE id = 2";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
?>