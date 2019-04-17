<?php
include("conexionBDD.php");
if(isset($_POST["nombre"]) && !empty($_POST["nombre"]) &&
	isset($_POST["apellido"]) && !empty($_POST["apellido"]) && 
	isset($_POST["correo"]) && !empty($_POST["correo"]) && 
	isset($_POST["rol"]) && !empty($_POST["rol"]) && 
	isset($_POST["passw"]) && !empty($_POST["passw"]) && 
	isset($_POST["passw1"]) && !empty($_POST["passw1"]) &&
	$_POST["passw"]== $_POST["passw1"])
{

$mysqli=new mysqli("localhost","root","","plataforma");
$sql="INSERT INTO usuarios (nombre, apellido, correo, codigo, idrol) 
	VALUES ('$_POST[nombre]','$_POST[apellido]','$_POST[correo]',md5('$_POST[passw]'),$_POST[rol])";
$mysqli->query($sql);

print "Datos ingresados exitosamente</br>";
print "nombre:".$_POST['nombre']."</br>";
print "apellido:".$_POST['apellido']."</br>";
print "correo:".$_POST['correo']."</br>";
print "clave:".md5($_POST['passw'])."</br>";

echo "
	<script>
		alert('REGISTRADO EXITOSAMENTE.');
		window.location.href = 'login1.php';
	</script>
";

}else{
	
	//echo $_POST["passw"];
	
	echo "
	<script>
		alert('ERROR! NO SE REGISTRO.');
		window.location.href = 'registro1.php';
	</script>
";

}

//sleep(5);
//header('Location: login1.php');  
?>
 