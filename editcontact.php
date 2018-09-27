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
	<form method="post" action="edtr.php">
	<table>
	 <tr>
	 	<td><b>Nome</b></td>
	 	<td><b>Telefone</b></td>
	 	<td><b>Email</b></td>
	 	<td><b>Editar</b></td>
	 </tr>
	<?php 
	   include 'conn.php';

       $sql = "select nome, telefone, email from Contato";
       $query = $mysqli->query($sql);
       $i = 0;
       while($row = $query->fetch_assoc()){
       $i++;
	?>
	 <tr>
	 	<td><?php echo $row["nome"] ?></td>
	 	<td><?php echo $row["telefone"] ?></td>
	 	<td><?php echo $row["email"] ?></td>
	 	<td><input type="checkbox" name="edtr" value=<?php echo "cont".i?>></td>
	 </tr>
	<?php
       }
	 ?>
	</table>
	<br>
	<br>
	<br>
	<input type="submit" value="Editar">
    </form>

</body>
</html>