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

<style>
   *{
   background: linear-gradient(to left,black,white,black);
   }
   h1{
      color: black;
      text-align: center;
   }
   img{
      align-content: center;
   }
   a{
      font-size: 30px;
      margin-left: 85%;
   }
   
</style>

<body>

   <h1>Bienvenido al juego</h1>


<?php

    $a = $_GET['id'];
    echo $a;

   $conn=new conexion();
   $consulta=$conn->conectar();
   $sql="SELECT avatar FROM usuario WHERE username = '$a'";
   $stmt=$consulta->prepare($sql);
   $stmt->execute();
?>
   <center>
<?php
   while($fila=$stmt->fetch())
   {
      echo '<img src='.$fila['avatar'].' width="30%">';
   }
?>
   </center>


   <br>
   <center><section> aca va el juego</section></center>
   <br>
   <br>
   <a href = "../php/cerrar_sesion.php"> cerrar sesion </a>
</body>
</html>



