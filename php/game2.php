<?php
$Score = $_POST['Score'];
$jugador = $_POST['jugador'];
//$Score ='500';
//$jugador ='antony';


require_once ('../php/conexion.php');


 $conn=new Conexion(); //clase conexion
 $consulta=$conn->Conectar();//invoca la variable conexion, metodo conectar
 $sql="SELECT * FROM puntaje WHERE username ='$jugador'";

 $stmt=$consulta->prepare($sql);
 $stmt->execute();

 $contar=$stmt->rowCount();

if ($contar > 0) {
	$sql="UPDATE puntaje SET total=total+'$Score' WHERE username ='$jugador'";
	$stmt = $consulta->prepare($sql);
	$stmt->execute();

} else {
	$sql = "INSERT INTO puntaje VALUES ('','$jugador','$Score')";
	$stmt = $consulta->prepare($sql);
	$stmt->execute();
}

//"http://localhost/juego2/php/game2.php"
//"Score="& Score & "&jugador="& jugador.text
//http://localhost/juego/php/game2.php

?>