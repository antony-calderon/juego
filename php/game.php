<?php 
   session_start();
   require_once('../php/conexion.php');
   if(isset($_SESSION['ingreso']) && $_SESSION['ingreso'] ==true){
   }
   else{
   	echo "no tiene permisos para ingresar <br>";
   	echo "<br> <a href = ../html/ingreso.html>vuelva a logueo</a>";
   		echo "<br> <a href = ../html/nuevo_usuario.html>registro</a>";
   	exit;
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <font color="green">  <h1>bienvenido al juego</h1></font>

<?php

    $a = $_GET['id'];
    echo $a;

   $conn=new conexion();
   $consulta=$conn->conectar();
   $sql="SELECT avatar FROM usuario WHERE username = '$a'";
   $stmt=$consulta->prepare($sql);
   $stmt->execute();
   while($fila=$stmt->fetch())
   {
      echo '<img src='.$fila['avatar'].' width="30%">';
   }

?>

   <section> aca va el juego</section>
   <br>
   <br>
   <a href = "../php/cerrar_sesion.php"> cerrar sesion </a>
</body>
</html>



