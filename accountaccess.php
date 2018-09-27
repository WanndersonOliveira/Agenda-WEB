<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
	<title>My Agenda</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<script type="text/javascript" src="js/accountaccess.js"></script>
	<div id="title">My Agenda</div>
	<div id="subtitle">Login</div>
	<form action="registro.php?reg=3" method="post">
	    <div id="user">Usuário</div>
		<input type="text" name="username" id="campo1">
		<div id="password">Senha</div>
		<input type="password" name="password" id="campo2">
		<input type="submit" value="Entrar" id="botao">
	</form>

	<a href="myagenda.php" id="inicio_c">
		<div id="inicio">
			Início
		</div>
	</a>
	
	<p id="alert">
		<?php
 		 if($_GET['check'] == 0){
 		 	echo "Usuário e/ou senha não existem";
 		 } else if($_GET['check'] == 1){
 		 	echo " ";
 		 }
		?>
	</p>

</body>
</html>