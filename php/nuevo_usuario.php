

<?php
//llamar a conexion 
require_once ('../php/conexion.php');
//traer variables del formulario name
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$email = $_POST['email'];
$birthdate = $_POST['birthdate'];
$imagen = $_FILES['imagen']['name'];

if ($password == $password2)
{




	// numeros aleatorios
	$indicador = rand(0,10000);
	$dia = date('z'); //dia en que estamos

	$ruta = "../fotosavatar/".$indicador.$dia.$imagen;
	$carga = @move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);

	//echo $nickname; hay comunicacion con los tres archivos

	$conn=new Conexion();
	$llamarMetodo=$conn->Conectar();

	$sql="INSERT INTO usuario VALUES ('$username','$password','$email','$birthdate','$ruta')";

	$stmt=$llamarMetodo->prepare($sql);
	$stmt->execute();

	if ($stmt)
	{
		echo "datos insertados";
	}
	else
	{
		echo "psicologia";
	}
}
else
{
	echo "las contraseñas no coinciden";
}

 ?>








