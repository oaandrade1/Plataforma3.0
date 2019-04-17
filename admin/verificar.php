<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="/plataforma/css/login.css">
<body>

</body>
</html>

<?php
	session_start();

	$usuario=$_POST['usuario'];
	$clave=$_POST['codigo'];
	//Clave encriptada de Inicio Sesion
	$clave = md5($clave);


$_SESSION['usuario'] = $usuario;
	$_SESSION['tipo'] = '$rol';
	$_SESSION['codigo'] = '$clave';
	//conexion BDD
	include_once 'conexion.php';
	//include("conexionBDD.php");
	$sql="SELECT u.idautor,r.rol, u.correo, u.codigo FROM usuarios u JOIN roles r ON u.idrol=r.idrol WHERE u.correo='$usuario' AND u.codigo='$clave'";

$Administrador="SELECT r.rol, u.correo, u.codigo FROM usuarios u JOIN roles r ON u.idrol=r.idrol WHERE r.rol='Admin' AND u.correo='$usuario' AND u.codigo='$clave'";
$Docente="SELECT r.rol, u.correo, u.codigo FROM usuarios u JOIN roles r ON u.idrol=r.idrol WHERE r.rol='Docente' AND u.correo='$usuario' AND u.codigo='$clave'";

$result=mysqli_query($conectar,$sql);	

$sesion=mysqli_fetch_array($result);

$rol = $sesion[1];
$identidad = $sesion[0];

$result1=mysqli_query($conectar,$Administrador);
$result2=mysqli_query($conectar,$Docente);

if($rol=="Admin"){
	//DIRECCIONA A ESPACIO DE ADMINISTRADOR
	if(mysqli_num_rows($result1) > 0 AND $clave == $sesion['codigo']) 
	{
	    session_start();
	    $_SESSION['Administrador'] = "usuario";
	    $_SESSION['identidadUSR'] = $identidad;
	    header("Location: /plataforma/administrador.php");
	    exit(); 

	}
	else{

		echo "
		<script>
			alert('ERROR AL INICIAR SESIÓN');
			window.location.href = '/plataforma/login1.php';
		</script>
	";
	}	
}else{

	//DIRECCIONA A ESPACIO DE DOCENTES
	if(mysqli_num_rows($result2) > 0 AND $clave == $sesion['codigo']) 
	{
	    session_start();
	    $_SESSION['Docente'] = "usuario";
	    $_SESSION['identidadUSR'] = $identidad;
	    header("Location: /plataforma");
	    exit(); 

	}
	else{

		echo "
		<script>
			alert('ERROR AL INICIAR SESIÓN');
			window.location.href = '/plataforma/login1.php';
		</script>
	";
	}	
}



mysqli_free_result($result);
	mysqli_close($conectar);
?>

