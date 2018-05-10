<body>


   <style>

   *{
      background: black;
      
   }
      
   .tabla{
      position: absolute;
      left:48%;
      top: 22%;
      width: 2%;
      height: 60%;
      font-size: 200%;
      color:#01A9DB ;
   }
   h1{
      position: absolute;
      left: 42%;
      top: 6%;
      color:#01A9DB;
      font-size: 250%;
   }

   .boton_personalizado{
   position: absolute;
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0;
    top: 90%;
    left: 90%;
  }
  .boton_personalizado:hover{
    color: #1883ba;
    background-color: #ffffff;
  }

   img{
       position: absolute;
   width: 30%;
   height: 63%;
   top: 22%;
   left: 15%;
   }
  

   </style>
    <?php
    require_once('conexion.php');
         $conn=new conexion(); //clase conexion
         $consulta=$conn->conectar();//invoca la variable conexion, metodo conectar
         $sql="SELECT id , total, username FROM puntaje ORDER BY total DESC limit 5 ";
         $stmt=$consulta->prepare($sql);
         $stmt->execute();
   ?>
      <table class="tabla">
   
         <h1>TOP RANKING</h1>
         <thead>
          <tr>
             <th>Posicion</th>
             <th>|Username|</th>
             <th>Total</th>
          </tr>
          </thead>


     <?php
         $conta=0;
         while($fila=$stmt->fetch())
         {
            $conta=$conta+1;

            echo '<tr>';
            echo '<td>-'.$conta.'</td>';
            echo'<td>'.$fila['username'].'</td>';
            echo'<td> '.$fila['total'].'</td> ';
            echo '</tr>';
           
         }

      ?>

      </table>
      <ul class="img1">
         <img src="../imagenes/imagenes-robo/copa5.gif">
      </ul>

      <a class="boton_personalizado" href = "../index.html"> regresar </a>
   
</body>
