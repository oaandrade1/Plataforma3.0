<title>Eliminar usuario</title>
<link rel="stylesheet" type="text/css" href="css/formulario.css">

<?php
include_once 'conexion.php';
//$nombre=$_POST['nombre'];
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
<form action="eliminarU.php" method="post" autocomplete="off">
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

<form action='eliminarU.php' method='post' class='login'>


    <!-- Contenedor del Formulario -->
          
<label>Nombre</label>
<input type='text' name='nombre' value='$row[nombre]' readonly></td></tr>

<label>Apellido</label>
<td><input type='text' name='apellido' value='$row[apellido]' readonly></td></tr>

<label>Correo electronico</label>
<td><input type='text' name='correo' value='$row[correo]' readonly></td></tr>

<tr>
<td colspan=2 align='center'><input type='submit' name='Eliminar' value='Eliminar' class='boton'></td></div>
</form>";

}
else{
echo "<div align='center'>No se encuentran registros con ese numero de id</div><br>"; 
}
}
?>

<?php
//ELIMINAR USUARIO
if(isset($_REQUEST['Eliminar'])){
$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellido'];

//consulta sql
$queryi="DELETE FROM usuarios 
WHERE CONCAT(`Nombre`, ' ',`Apellido`) = '$nombre $apellido'";
$val=mysqli_query($conectar,$queryi);//ejecutando consulta

if(!$val){
echo "No se ha podido Eliminar";
}
else {
echo "Usuario eliminado<br><br>";
}
}
?>
</div>


<script type="text/javascript">
document.oncontextmenu = function(){return false;}
</script>		
