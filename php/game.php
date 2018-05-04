<!DOCTYPE html>
<html>
   <head>
      <title>Panel</title>
      <link rel="stylesheet" type="text/css" href="../css/reset.css" />
      <link rel="stylesheet" type="text/css" href="../css/index.css" />
   </head>

<?php 
   require_once('../php/conexion.php'); //llama a la conexion
   session_start();
   if(isset($_SESSION['ingreso']) && $_SESSION['ingreso'] ==true){
   }
   else
   {
   	echo "no tiene permisos para ingresar <br>";
   	echo "<br> <a href = ../html/ingreso.html>vuelva a logueo</a>";
   	echo "<br> <a href = ../html/nuevo_usuario.html>registro</a>";
   	exit;
   }
?>


<style>
   body{
  
   background: url(../imagenes/uni.jpg);
   }
   h1{
      color: white;
      text-align: center;
   }
   img{
      align-content: center;
   }
   a{
      color: white;
      font-size: 30px;
      margin-left: 85%;
   }  
</style>


<body>
<section>

   <h1>PANEL DE CONTROL</h1>
   <?php
         $a = $_GET['id'];
         echo $a;
         $conn=new conexion(); //clase conexion
         $consulta=$conn->conectar();//invoca la variable conexion, metodo conectar
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



   <?php
         $a = $_GET['id'];
         echo $a;
         $conn=new conexion(); //clase conexion
         $consulta=$conn->conectar();//invoca la variable conexion, metodo conectar
         $sql="SELECT username, total FROM puntaje order by total desc";
         $stmt=$consulta->prepare($sql);
         $stmt->execute();
   ?>


   <center>
      <?php
         while($fila=$stmt->fetch())
         {
            echo ''.$fila['username'].' - '.$fila['total'].'<br>';
         }
      ?>
   </center>
</section>

<!-- CHAT BOOT-->

<section>

      <h1 class="title">Panel-bot</h1>
         <article class="chat"></article>
         <article class="busy"></article>
         <article class="input">
            <input type="text" placeholder="Habla conmigo!!!!" />
            <a>Enviar</a>
         </article>
   
</section>
 <a href = "../php/cerrar_sesion.php"> cerrar sesion </a>
<script type="text/javascript" src="../js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="../js/chat-bot.js"></script>
<script type="text/javascript" src="../js/index.js"></script>
</body>
</html>



