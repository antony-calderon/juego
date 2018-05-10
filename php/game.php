

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
      position: absolute;
      left: 12%;
      top: 15%;
      
   }
   a{
      color: white;
      font-size: 30px;
      position: absolute;
      top: 90%;
      left: 85%;
   }  
   .nose{
      position: absolute;
      font-size: 30px;
      color: white;
      left: 45%;
      top: 20%;
   }
   .nose1{
      position: absolute;
      font-size: 30px;
      color: white;
      left: 45%;
      top: 25%;
   }
   .nose2{
      position: absolute;
      font-size: 30px;
      color: white;
      left: 45%;
      top: 30%;
   }
    .nose3{
      position: absolute;
      font-size: 30px;
      color: white;
      left: 45%;
      top: 35%;
   }

   .nose4{
      position: absolute;
      font-size: 30px;
      color: white;
      left: 45%;
      top: 40%;
   }


   .boton_personalizado{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0;
  }
  .boton_personalizado:hover{
    color: #1883ba;
    background-color: #ffffff;
  }
  .entrar_juego
  {
    position: relative;
    left: 45%;

    
  }
</style>


<body>
<section>

   <h1>PANEL DE CONTROL</h1><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!--***********************CONSULTA DE IMAGEN*************************-->
   <?php
         $a = $_GET['id'];
         
         echo'<div class="nose">'.'player:'.$a.'</div>';
         $conn=new conexion(); //clase conexion
         $consulta=$conn->conectar();//invoca la variable conexion, metodo conectar
         $sql="SELECT avatar FROM usuario WHERE username = '$a'";
         $stmt=$consulta->prepare($sql);
         $stmt->execute();
   ?>
   
      <?php
         while($fila=$stmt->fetch())
         {
            echo '<img src='.$fila['avatar'].' width="30%">';
         }
      ?>

 <!--***********************CONSULTA PASSWORD*************************-->

 <?php
         $a = $_GET['id'];
         $conn=new conexion(); //clase conexion
         $consulta=$conn->conectar();//invoca la variable conexion, metodo conectar
         $sql="SELECT password FROM usuario WHERE username = '$a'";
         $stmt=$consulta->prepare($sql);
         $stmt->execute();
   ?>


     <?php
         while($fila=$stmt->fetch())
         {
            echo'<div class="nose1">'.'password:'.$fila['password'].'</div>';
         }
      ?>

<!--***********************CONSULTA DE PUNTAJE************************-->
  
   <?php
         $a = $_GET['id'];
         $conn=new conexion(); //clase conexion
         $consulta=$conn->conectar();//invoca la variable conexion, metodo conectar
         $sql="SELECT total FROM puntaje order by total desc";
         $stmt=$consulta->prepare($sql);
         $stmt->execute();
   ?>


       <?php
         while($fila=$stmt->fetch())
         {
            //echo ''.$fila['username'].' - '.$fila['total'].'<br>';
            //echo'<divclass="nose">'.$fila['username'].'-'.$fila['total'].'</div>';

         }
      ?>  

<!--***********************CONSULTA DE CORREO*************************-->

 <?php
         $a = $_GET['id'];
         $conn=new conexion(); //clase conexion
         $consulta=$conn->conectar();//invoca la variable conexion, metodo conectar
         $sql="SELECT email FROM usuario WHERE username = '$a'";
         $stmt=$consulta->prepare($sql);
         $stmt->execute();
   ?>


     <?php
         while($fila=$stmt->fetch())
         {
            echo'<div class="nose2">'.'correo:'.$fila['email'].'</div>';
         }
      ?>

<!--***********************CONSULTA DE BIRTHDATE*************************-->

 <?php
         $a = $_GET['id'];
         $conn=new conexion(); //clase conexion
         $consulta=$conn->conectar();//invoca la variable conexion, metodo conectar
         $sql="SELECT birthdate FROM usuario WHERE username = '$a'";
         $stmt=$consulta->prepare($sql);
         $stmt->execute();
   ?>


     <?php
         while($fila=$stmt->fetch())
         {
            echo'<div class="nose3">'.'birthdate:'.$fila['birthdate'].'</div>';
         }
      ?>

<!--***********************CONSULTA DE PUNTAJE*************************-->

 <?php
         $a = $_GET['id'];
         $conn=new conexion(); //clase conexion
         $consulta=$conn->conectar();//invoca la variable conexion, metodo conectar
         $sql="SELECT total FROM puntaje WHERE username = '$a'";
         $stmt=$consulta->prepare($sql);
         $stmt->execute();
   ?>


     <?php
         while($fila=$stmt->fetch())
         {
            echo'<div class="nose4">'.'puntaje:'.$fila['total'].'</div>';
         }

      ?>


</section>

 <h2><a class="entrar_juego" href="http://localhost:50000/">entra a jugar</a></h2>

 <a class="boton_personalizado" href = "../php/cerrar_sesion.php"> cerrar sesion </a>
 
</body>
</html>



