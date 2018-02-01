<?php	
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "funildevendas";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	$id = 1;
	$sql = "SELECT * FROM itens WHERE comodo_id = $id";
	$query = mysqli_query($conn, $sql);
?>


<form action="processar_form.php" method="POST">
	<h1>Vistoria de Imoveis</h1>
	<?php
	
	while ($rows = mysqli_fetch_array($query)) {
		$id = $rows['id'];
		?><label><?php echo $rows['nome']; ?></label><?php
		echo "<input type='radio' name='nome[$id]' value='1'>Bom";
		echo "<input type='radio' name='nome[$id]' value='2'>Regular";
		echo "<input type='radio' name='nome[$id]' value='3'>Irregular <br><br>";
	}
	?>
	<input type="submit" value="Cadastrar">
</form>