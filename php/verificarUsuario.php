<!DOCTYPE html>

<html>

<head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"/></script>


<link rel="stylesheet" href="../css/nuevo_usuario.css"> <!--trae estilos css-->
</head>

<?php 
session_start();
?>


<body style="background: linear-gradient(to left,black,white,black)">
<?php 
$bd = "base_juego";
$user = "root";
$password = "";
$host = "localhost";
$conexion = new mysqli($host, $user, $password, $bd);
//pdo mysqli
//require_once ('conexion.php');
$username = $_POST['username'];
$password = $_POST['password'];
//$conn= new Conexion();
//$colombia=$conn->Conectar();
$sql = "SELECT * FROM usuario WHERE username = '$username'";
$result = $conexion->query($sql);
//$stmt=$colombia->prepare($sql);
//$stmt->execute();
?>


<center>
	<font color="black" size="25">
	<?php
	 if($result->num_rows > 0)
	 {
	 }
	 	$row = $result->fetch_array(MYSQLI_ASSOC); //averiguar si cambiamos a pdo 

	 	if($password==$row['password']){
	 			//crean las variables de sesion
	 		$_SESSION['ingreso'] = true;
	 		$_SESSION['username'] = $username;
	 		//sesion start sesion expire
	        
	 		echo "Bienvenido!!! " .$username;
	

		echo "<script language= 'JavaScript' type='text/javascript'>
					swal({  title: 'Credenciales correctas',   
					        text: 'Ingrese al panel de control',   
					        type: 'success',   
					        confirmButtonText: 'Continuar' },
					        
					function () 
					{
					    window.location.href = '../php/game.php?id=".$username."';
					});

    		</script> 	<br>";

	
	
	 		//echo "<br> <a href = ../php/game.php?id=".$username.">INGRESE AL JUEGO </a>";

	 	} 	else{
	 		echo "sus credenciales no coinciden o no existen";
	 		echo "<br> <a href = ../html/ingreso.html>vuelva a logueo</a>";
	 	}
	 
	?>
	</font>
</center>

</body>
