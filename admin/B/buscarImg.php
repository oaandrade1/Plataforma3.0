<?php
    //require('Conexion.php');
    include_once 'Conexion.php';
    $q=$_POST['q'];
	//$sql = "SELECT * FROM `documentos` WHERE `titulo`  LIKE '%$q%' or `descripcion`  LIKE '%$q%' or `tipo`  LIKE '%$q%'";
	$sql = "SELECT * FROM `imagenes` WHERE `titulo`  LIKE '%$q%' or `descripcion`  LIKE '%$q%'";

	$result = $conexion->query($sql);
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Vistas</title>
		<link rel="stylesheet" href="Css/css.css">
		<link rel="stylesheet" href="Css/tablaresponsive.css">
		<script src="Script/Script.js"></script>
	</head>
	<body>
    
	<div class="panel-rojo">
		<div class="panel-header ">
			<strong>LISTA DE IMAGENES</strong>
		</div>
		<table class="tabla">
			<tr>
				<th style="width: 15%;">ID IMAGEN</th>
			    <th style="width: 7%;">TITULO</th>
			    <th style="width: 7%;">DESCRIPCION</th>
			    <th style="width: 15%;">IMAGEN</th>
			    <th style="width: 7%;">DESCARGAR</th>
			     <th style="width: 7%;">MODIFICAR</th>
			      <th style="width: 7%;">ELIMINAR</th>
			</tr>
			<?php if (mysqli_num_rows($result) == 0) { ?>
			<tr>
				<td colspan="10"> <h3>No existe resultados para esta busqueda</h3>		</td>
			</tr>
			<?php }else{
			while($row = $result->fetch_assoc()){ 	  

				?>

			<tr>
				<td><?php echo $row['id_imagen'];?></td>
				<td><?php echo $row['titulo'];?></td>
				<td><?php echo $row['descripcion'];?></td>

					<td>
				<img src="/plataforma/admin/B/imagenMostrar.php?id_imagen=<?php echo $row['id_imagen']?>"  width='200'></td>

			<td style="text-align: center"><a href="/plataforma/admin/B/imagenMostrar.php?id_imagen=<?php echo $row['id_imagen']?>"  width='200' download="Imagen"><img src="/plataforma/imagenes/descargar.png" alt="Descargar" style="width:25px;height:25px;;border:0;"></a></td>
			<td style="text-align: center">
					<a href="ModificarI.php?id=<?php echo $row['id_imagen'];?>">
						<img src="/plataforma/imagenes/modificar.png" alt="Editar";border:0;"  style="width:25px;height:25px;;border:0;">
					</a>
				</td>
				<td style="text-align: center">
					<a href="EliminarI.php?id=<?php echo $row['id_imagen'];?>"  onclick="return confirm('Estas seguro de eliminar este registro?');"   >
					<img src="/plataforma/imagenes/eliminar.png" alt="Eliminar" style="width:25px;height:25px;;border:0;">
					</a>
				</td>
			</tr>

			<?php

			  }} ?>
	
		</table>
	</div>

    </div>
	</body>
</html>