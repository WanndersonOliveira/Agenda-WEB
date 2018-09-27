<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>My Agenda</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

  <form action="registro.php?reg=2" method="post">
    <div id="nome_txt">Nome:</div> 
    <input type="text" size="15" name="nome" id="nome_f">
  	<div id="tel_txt">Telefone:</div> 
    <input type="text" name="tel" id="tel_f">
  	<div id="email_txt">Email:</div> 
    <input type="text" name="email" size="15" id="email_f">
  	<input type="submit" value="Enviar" id="button">
  </form>
  <a href="editcontact.php" id="txt1_div">
    <div id="txt1">
      Editar contato
    </div>
  </a>
  <a href="deletecontact.php" id="txt2_div">
    <div id="txt2">
      Excluir contato
    </div>
  </a>
  <a href="contatos.php" id="txt3_div">
    <div id="txt3">
      Todos os contatos
    </div>
  </a>
  <a href="index.php" id="txt4_div">
    <div id="txt4">Sair</div>
  </a>


</body>
</html>