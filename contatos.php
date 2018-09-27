<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>My Agenda</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <a href="initio.php">Voltar</a>
	<br>
	<br>
	<table>
	 <tr>
	 	<td><b>Nome</b></td>
	 	<td><b>Telefone</b></td>
	 	<td><b>Email</b></td>
	 </tr>
	<?php 
	   include 'conn.php';

       $sql = "select nome, telefone, email from Contato";
       $query = $mysqli->query($sql);

       while($row = $query->fetch_assoc()){
	?>
	 <tr>
	 	<td><?php echo $row["nome"] ?></td>
	 	<td><?php echo $row["telefone"] ?></td>
	 	<td><?php echo $row["email"] ?></td>
	 </tr>
	<?php
       }
	 ?>

	</table>

</body>
</html>