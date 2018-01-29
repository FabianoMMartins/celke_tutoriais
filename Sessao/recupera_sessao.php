<?php
	session_start();
	
	echo "Sessao Recuperada: ".$_SESSION['carrinho'];
	echo "<br>Quantidade de produto: ".$_SESSION['numero_produtos'];
	
	//session_destroy();
	unset($_SESSION['carrinho'], $_SESSION['numero_produtos']);
?>


<?php
  echo "O status da porta é".$_SESSION['status'];

?>