<?php	
	$vistoria = 2;
	
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "funildevendas";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	foreach($_POST['nome'] as $id => $nome){
		echo "ID do Item: $id <br>";
		echo "Valor do Campo: $nome <hr>";
		$result_situacao_itens = "INSERT INTO situacos_itens (item_id, situacao, vistoria_id) VALUES ('$id', '$nome', '$vistoria')";
		$resultado_situacao_itens = mysqli_query($conn, $result_situacao_itens);
	}

?>