<?php
	session_start();
	
	$_SESSION['carrinho'] = "5948";
	$_SESSION['numero_produtos'] = "3";
	
	echo $_SESSION['carrinho'];
?>

<?php

  $_SESSION['codigo'] = "13278956";
  $codigo = $_SESSION['codigo'];

    if ($codigo == true)
    {
        echo "Abro a porta";
    }
    else
    {
        echo "A porta permenece fechada";
    }

$_SESSION['status'] = $codigo;