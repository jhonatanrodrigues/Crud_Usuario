<?php
	$server = "localhost";
	$user = "root";
	$pass = "root";
	$bd = "banco_jmj";
	
	if ( $conn = mysqli_connect($server, $user, $pass, $bd)) {
		//echo "Conectado!";
	}else
		echo "Erro";

	function mensagens($texto, $tipo){
		echo "<div class='alert-$tipo' role='alert'>
				$texto
			</div>";
	}


?>