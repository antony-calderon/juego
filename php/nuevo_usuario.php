<!DOCTYPE html>

<html>

<head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"/></script>


<link rel="stylesheet" href="../css/nuevo_usuario.css"> <!--trae estilos css-->
</head>
<body>
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
				
?>
			<script language="JavaScript" type="text/javascript">
					swal({  title: "Informacion Enviada",   
					        text: "Datos enviados correctamente.",   
					        type: "success",   
					        confirmButtonText: "Continuar" },
					function () 
					{
					    window.location.href = '../index.html';
					});

    		</script>
			
<?php				
				
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
 </body>








