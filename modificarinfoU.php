<title>Modificar datos de usuario</title>
<link rel="stylesheet" type="text/css" href="css/formulario.css">

<?php
include_once 'conexion.php';

	//CAPTURAR NOMBRE DE USUARIOS 
	$sql = "SELECT nombre, apellido FROM usuarios";
	$result = mysqli_query($conectar,$sql);
	echo "<datalist id='lista'>";
	while($fila=mysqli_fetch_array($result)){
		$nombreG = $fila[0]." ".$fila[1];
		echo "	
			<option value='$nombreG'></option>";
	}
	echo "</datalist>";
?>

<!-- BUSCAR REGISTRO -->
<div class="wrapper">
<div align="center" class="login">
<form action="modificarinfoU.php" method="post" autocomplete="off">
  <div class='login-container'>
NOMBRE DE USUARIO <input type="text" name="nombre" list="lista" required>
<input type="submit" name="buscar" value="Buscar" class="boton">
</form>

<!-- CONEXION PARA BUSCAR REGISTRO EN LA BDD -->

 <?php 
 if(isset($_REQUEST['buscar'])){
$nombre=$_REQUEST['nombre'];

                    $conexion = mysqli_connect("127.0.0.1","root","","plataforma");
                    $result = mysqli_query($conexion,"select * from usuarios where CONCAT(nombre,' ',apellido) = '$nombre'"); 
               if($row=mysqli_fetch_array($result))
         {




echo "<br>";

echo "

<form action='modificarinfoU.php' method='post' class='login'>


    <!-- Contenedor del Formulario -->
          
<label>Nombre</label>
<input type='text' name='nombre' value='$row[nombre]'></td></tr>

<label>Apellido</label>
<td><input type='text' name='apellido' value='$row[apellido]'></td></tr>

<label>Correo electronico</label>
<td><input type='text' name='correo' value='$row[correo]'></td></tr>
<input type='hidden' name='idautor' value='$row[idautor]'>
<tr>
<td colspan=2 align='center'><input type='submit' name='Modificar' value='Modificar' class='boton'></td></div>
</form>";

}
else{
echo "<div align='center'>No se encuentran registros con ese numero de id</div><br>"; 
}
}
?>

<?php
//ACTUALIZAR DATOS
if(isset($_REQUEST['Modificar'])){
$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellido'];
$correo=$_REQUEST['correo'];
$idautor=$_REQUEST['idautor'];

//CONSULTA SQL
$queryi="UPDATE usuarios SET 
nombre='$nombre',
apellido='$apellido',
correo='$correo'
WHERE idautor=$idautor";
//WHERE CONCAT(`nombre`, ' ',`apellido`) = '$nombre $apellido'";
$val=mysqli_query($conectar,$queryi);//ejecutando consulta

if(!$val){
echo "No se ha podido Modificar";
}
else {
echo "Datos Modificados Correctamente<br><br>";
}
}
?>
</div>


<script type="text/javascript">
document.oncontextmenu = function(){return false;}
</script>		
