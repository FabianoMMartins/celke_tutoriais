<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Celke - Radio button dinâmico</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Vistoria de Imoveis</h1>
			</div>
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
			<form class="form-horizontal" action="processar_form.php" method="POST">
				<?php while ($rows = mysqli_fetch_array($query)) { ?>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label"><?php echo $rows['nome']; ?></label>
						<div class="col-sm-10">
							<?php
								$id = $rows['id'];
								echo "<label class='radio-inline'><input type='radio' name='nome[$id]' value='1'><span class='label label-success'>Bom</span></label>";
								echo "<label class='radio-inline'><input type='radio' name='nome[$id]' value='2'><span class='label label-warning'>Regular</span></label>";
								echo "<label class='radio-inline'><input type='radio' name='nome[$id]' value='3'><span class='label label-danger'>Irregular</span></label> <br><br>";
							?>
						</div>
					</div>
				<?php } ?>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Cadastrar</button>
					</div>
				 </div>
			</form>
		</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


