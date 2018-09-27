<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>My Agenda</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<p id="sub">Criar nova conta</p>
  	<form action="registro.php?reg=1" method="post">
  	    <div id="user">Digite o seu login:</div>
  		<input type="text" name="username" id="campo1">
  		<div id="password">Digite a sua senha</div>
  		<input type="password" name="senha" id="campo2">
        <input type="submit" value="Criar conta" id="botao">
  	</form>
    <a href="myagenda.php" id="inicio_c">
     <div id="inicio">
       Início
     </div>
    </a>

    <div id="alert">
       <?php 
          if($_GET['check'] == '1'){
            echo "Conta criada com sucesso!";
          } else if($_GET['check'] == '0'){
            echo " ";
        }
       ?>

    </div>
</body>
</html>