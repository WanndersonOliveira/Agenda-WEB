<?php 
    session_start();

	$id = 1;
	$ident = (string) $id;

	$_SESSION['id'] = $ident;

	header('Location: myagenda.php');
	//Sistema web que faz acesso a banco de dados inserindo os registros!
?>