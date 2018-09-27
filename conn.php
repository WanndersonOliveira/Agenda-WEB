<?php 
	$host = "localhost";
	$user = "root";
	$senha = "";
	$bd = "agenda";

	$mysqli = new mysqli($host, $user, $senha, $bd);

	if($mysqli->connect_errno){
		echo "Falha na conexão: (" .$mysqli->connect_errno.")".$mysqli->connect_error;
	}


?>