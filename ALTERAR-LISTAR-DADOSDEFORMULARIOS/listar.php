<?php
	include_once("conexao.php");
	$result_usuario = "SELECT * FROM usuarios";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
		echo $row_usuario['id']."<br>";		
		echo $row_usuario['nome']."<br>"; ?>
		<a href="form_alteracao.php?id=<?php echo $row_usuario['id']; ?>">Editar</a>
		
		<hr>
	<?php }
?>