<?php
	session_start();
	require 'conexion.php';
	$usuario=$_POST["email-modallogin"];
	$pass=$_POST["password-modallogin"];
	$sql=mysqli_query($conn,"SELECT * FROM cliente WHERE correo='$usuario'");
	if($f=mysqli_fetch_assoc($sql))
	{
		if($pass==$f['contrasenia'])
		{
			$_SESSION['id']=$f['id_usuario'];
			$_SESSION['user']=$f['correo'];
			header("Location: ../iniciousuario.php");
		}
		else
		{
			  /*echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'>
			  	Swal.fire({
				title: 'Contraseña Incorrecta',
				text: 'Su contraseña de usuario es Incorrecta',
				icon: 'error',
			
				confirmButtonText: 'Ok',
				//footer:'El tiempo de su pedido sera estimado en la seccion de pedidos',
				allowOutsideClick: false,
				allowEscapeKey: false,
				allowEnterKey: false,
				stopKeydpwnPropagation: false,
				//toast:true
			  });
			  </script>";*/

			  
			  echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10">
			  Swal.fire({
				  type: "error",
				  title: "Error al Ingresar",
				  showConfirmButton: true,
				  confirmButtonText: "Cerrar"
				}).then(function(result){
					if(result.value)
					{
						window.location="../index.php";
					}
				})
				</script>';

				//echo "<script>jQuery(function(){swal(\"¡Bien!\", \"Condición cumplida\", \"success\");});</script>";
			//echo "<script>location.href='/loginuser'</script>";
			//echo "<script>location.href='../index.php?msgi=1'</script>";
		}
	}
	else
	{
		//echo "<script>location.href='../index.php'</script>";	
		echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10">
			  Swal.fire({
				  type: "error",
				  title: "Error al Ingresar",
				  showConfirmButton: true,
				  confirmButtonText: "Cerrar"
				}).then(function(result){
					if(result.value)
					{
						window.location="../index.php";
					}
				})
				</script>';
	}
	/*require 'conexion.php';
	$usuario=$_POST["email-modallogin"];
	$pass=$_POST["password-modallogin"];
	$resultado=mysqli_query($conn,"SELECT * FROM cliente WHERE correo='$usuario' and contrasenia='$pass'");
		$num=mysqli_num_rows($resultado);
	if ($num==1) {
		header("Location: ../iniciousuario.php");
	} else
	{
		echo '<p class="alert alert-success agileits" role="alert" id="agregadoMS">Error al inciar sesion!</p>';
		header("Location: ../");
	}*/
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>LoginUser</title>
		<link rel="shortcut icon" href="favicon.ico">

		<link rel="stylesheet" href="../css/animate.css">
		<link rel="stylesheet" href="../css/icomoon.css">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/flexslider.css">
		<link rel="stylesheet" href="../css/style.css">

		<script src="../js/modernizr-2.6.2.min.js"></script>
	</head>
    <body>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<script src="../js/erroring.js"></script>
	</body>
</html>