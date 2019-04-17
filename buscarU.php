<title>BUSCAR JUGADOR</title>
<link rel="stylesheet" type="text/css" href="css/tipoLetra.css">
<link rel="stylesheet" type="text/css" href="css/cajatextjug.css">
<?php

include_once 'conexion.php';
$nombreC=$_POST['nombreC'];
	//CAPTURAR NOMBRE DE EQUIPOS SEGUN CATEGORIA
	$sql = "SELECT nombre, apellido,correo FROM usuario";
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
<form action="buscarU.php" method="post" autocomplete='off'>
<table border="0" align="center">
<tr>
<td>NOMBRES</td>
<td><input type="text" name="nombreJ" list="lista" required></td>

<td><input type="submit" name="buscar" value="Buscar" class="botones1"></td>
</form></table></tr>


<!-- CONEXION PARA BUSCAR REGISTRO EN LA BDD -->
<?php
include ("conexionBDD.php");
$con=Conectarse();
if(isset($_REQUEST['buscar'])){
$nombreJ=$_REQUEST['nombreJ'];
$query="SELECT `id_jugador`,`disciplinaJ`,`categoriaJ`,`fotoJ`,CONCAT(nombreJ,' ',apellidoJ),`dorsalJ`,
		`lugar_nacJ`,`fecha_nacJ`,`edadJ`,`direccionJ`,`fonoJ`,`emailJ`,`observacionJ`,`nombreC`,`estadoJ`,`tipo` 
		FROM datos_jugador 
		WHERE CONCAT(nombreJ,' ',apellidoJ) = '$nombreJ'";
$con=mysql_connect($host,$user,$pw) or die("problemas al conectar");
mysql_select_db($db,$con) or die("problemas al conectar la base de datos");
$sql=mysql_query($query,$con);
if($row=mysql_fetch_array($sql)){
echo  "
	<br>
	<center><table border = 3; cellspacing = 3; cellpadding = 3;>
		<tr class='bg1'>
			<th rowspan='4'><img src='imagen_mostrar.php?id_jugador=".$row["id_jugador"]."' width='150px' height='150px'></th>

			<th>Id jugador</th>
			<td colspan='2'>".$row[0]."</td>
			</tr>

			<tr>
			<th>Nombre</th>
			<td colspan='2'>".$row[4]."</td>
			</tr>

			<tr>
			<th>Disciplina</th>
			<td colspan='2'>".$row[1]."</td>
			</tr>

			<tr>
			<th>Categoria</th>
			<td colspan='2'>".$row[2]."</td>
			</tr>

			<tr>
			<th>Dorsal</th>
			<td>".$row[5]."</td>
			<th>Lugar de nacimiento</th>
			<td>".$row[6]."</td>
			</tr>

			<tr>
			<th>Fecha de nacimiento</th>
			<td>".$row[7]."</td>
			<th>Telefono</th>
			<td>".$row[10]."</td>
			</tr>

			<tr>
			<th>Nombre del club</th>
			<td>".$row[13]."</td>
			<th>Direccion</th>
			<td>".$row[9]."</td>
			</tr>
			
			<tr>
			<th>Edad</th>
			<td>".$row[8]."</td>
			<th>Correo</th>
			<td>".$row[11]."</td>
			</tr>

			<tr>
			<th>Estado</th>
			<td>".$row[14]."</td>
			<th>Observaciones</th>
			<td>".$row[12]."</td>
			</tr>
			
		</tr></class>";

	
}else{
	echo "<div align='center'>No se encuentran registros con esos datos del jugador</div><br>"; 
}
}
?>
</body>
</html>

<script type="text/javascript">
document.oncontextmenu = function(){return false;}
</script>

