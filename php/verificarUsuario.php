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

	?>
	<br>
	<img src="../imagenes/imagenes slider/go.jpg" width="650">
	<?php
	 		echo "<br> <a href = ../php/game.php?id=".$username.">INGRESE AL JUEGO </a>";

	 	} 	else{
	 		echo "sus credenciales no coinciden o no existen";
	 		echo "<br> <a href = ../html/ingreso.html>vuelva a logueo</a>";
	 	}
	 
	?>
	</font>
</center>

</body>
