<title>Eliminar Rol</title>
<link rel="stylesheet" type="text/css" href="css/formulario.css">

<?php
include_once 'conexion.php';
	//CAPTURAR NOMBRE DE ROLES
	$sql = "SELECT rol FROM roles";
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
<form action="eliminarRol.php" method="post" autocomplete="off">
  <div class='login-container'>
ROL <input type="text" name="rol" list="lista" required>
<input type="submit" name="buscar" value="Buscar" class="boton">
</form>

<!-- CONEXION PARA BUSCAR REGISTRO EN LA BDD -->

 <?php 
 if(isset($_REQUEST['buscar'])){
$rol=$_REQUEST['rol'];

                    $conexion = mysqli_connect("127.0.0.1","root","","plataforma");
                    $result = mysqli_query($conexion,"SELECT rol FROM roles WHERE rol = '$rol'"); 
               if($row=mysqli_fetch_array($result))
         {

echo "<br>";

echo "

<form action='eliminarRol.php' method='post' class='login'>

    <!-- Contenedor del Formulario -->
          
<label>Rol</label>
<input type='text' name='rol' value='$row[rol]' readonly></td></tr>

<tr>
<td colspan=2 align='center'><input type='submit' name='Eliminar' value='Eliminar' class='boton'></td></div>
</form>";

}
else{
echo "<div align='center'>No se encuentran registros</div><br>"; 
}
}

//ELIMINAR USUARIO
if(isset($_REQUEST['Eliminar'])){
$rol = $_REQUEST['rol'];
//consulta sql
$queryi="DELETE FROM roles 
WHERE rol = '$rol'";
$val=mysqli_query($conectar,$queryi);//ejecutando consulta

if(!$val){
echo "No se ha podido Eliminar";
}
else {
echo "Rol eliminado<br><br>";
}
}
?>
</div>


<script type="text/javascript">
document.oncontextmenu = function(){return false;}
</script>		
