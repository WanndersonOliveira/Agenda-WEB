<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>My Agenda</title>
</head>
<body>
   <br>
   <?php 
    include 'conn.php';
    /*
    * se reg == 1 é porque o registro veio da página accountcreate.php
    * se reg == 2 é porque o registro veio da página initio.php
    * se reg == 3 é porque o registro veio da página accountaccess.php
    */



    session_start();

    $reg = $_GET['reg'];

    if($reg == '2'){
        $identificador = $_SESSION['id'];
    	$idt = (int) $identificador;
    	$nome = $_POST['nome'];
    	$email = $_POST['email'];
    	$tel = $_POST['tel'];
    	$reg = $_GET['reg'];
    	$user = $_SESSION['username'];


    	$select = "SELECT * from contato";

		$consulta = $mysqli->query($select);
		$row_counter = $consulta->num_rows;

		if($row_counter == $idt){
			$idt++;
		} else if($row_counter > $idt){
			$idt = $row_counter+1;
		}
        
        $user_id = " ";

		$query = "select user_id, login from usuario";

		$consulta = $mysqli->query($query);

        while($row = $consulta->fetch_assoc()){
          if($row['login'] == $user){
          	 $user_id = $row['user_id'];
          }
        }

		$insert = "INSERT INTO Contato VALUES ('$idt', '$user_id', '$nome', '$tel', '$email')";

		if($mysqli->query($insert)){
			header("Location: contatos.php");
		} else {
			echo "Erro: " .$insert."<br>".$mysqli->error;
		}


    	$idt++;
    	$id = (string) $idt;
		$_SESSION['id'] = $id;

		$consulta->close();
		$mysqli->close();
    } else if($reg == '1'){
    	$username = $_POST['username'];
    	$_SESSION['username'] = $username;
    	$senha = $_POST['senha'];

    	$select = "SELECT * from usuario";

		$consulta = $mysqli->query($select);
		$row_counter = $consulta->num_rows;

		$row_counter++;

		$insert = "INSERT INTO Usuario VALUES ('$row_counter', '$username', '$senha')";

		if($mysqli->query($insert)){
			header("Location: accountcreate.php?check=1");
		} else {
			echo "Erro: " .$insert."<br>".$mysqli->error;
		}		
    } else if($reg == '3'){
    	$username = $_POST['username'];
    	$password = $_POST['password'];
    	$check = 0;

    	$sql = "select user_id, login, senha from Usuario";
        $query = $mysqli->query($sql);

        while($row = $query->fetch_assoc()){
 		 if($row['login'] == $username && $row['senha'] == $password){
 		 	 $_SESSION['id_user'] = $row['user_id'];
 		 	 header('Location: initio.php');
 		 } else {
 		 	 $check++;
 		 }
 
  		 if($check != 0){
  		 	 header('Location: accountaccess.php?check=0');
  		 }

        }
    }


   ?>
</body>
</html>

