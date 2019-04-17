<?php
    //require('Conexion.php');
    include_once 'Conexion.php';
    $q=$_POST['q'];
	//$sql = "SELECT * FROM `documentos` WHERE `titulo`  LIKE '%$q%' or `descripcion`  LIKE '%$q%' or `tipo`  LIKE '%$q%'";
	$sql = "SELECT * FROM `archivos` WHERE `titulo`  LIKE '%$q%' or `descripcion`  LIKE '%$q%'";

	$result = $conexion->query($sql);
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Vistas</title>
		<link rel="stylesheet" href="Css/css.css">
		<link rel="stylesheet" href="tablaresponsive.css">
		<script src="Script/Script.js"></script>
	</head>
	<body>
    
	<div class="panel-rojo">
		<div class="panel-header ">
			<strong>LISTA DE IMAGENES</strong>
		</div>
		<table class="tabla">
			<tr>
				
			    <td style="width: 7%;">TITULO</td>
			    <td style="width: 7%;">DESCRIPCION</td>
			    <td style="width: 15%;">IMAGEN</td>
			    <td style="width: 7%;">ETIQUETAS</td>
			    
			    <td style="width: 4%;">DESCARGAR</td>
			</tr>
			<?php if (mysqli_num_rows($result) == 0) { ?>
			<tr>
				<td colspan="10"> <h3>No existe resultados para esta busqueda</h3>		</td>
			</tr>
			<?php }else{
			while($row = $result->fetch_assoc()){


					if(!empty($row['tipo'])){
						$extension = explode("/",$row['tipo']);

						$dato = $row['titulo'].".".$extension[1];
					}else{
						$dato = $row['titulo'];
					}

				?>

			<tr>
			
				<td><?php echo $row['titulo'];?></td>
				<td><?php echo $row['descripcion'];?></td>
				
					<td>
				<img src="/plataforma/recursos/Mostrar.php?idarchivo=<?php echo $row['idarchivo']?>"  width='200' alt="No existe vista previa"></td>
				<td><?php echo $row['etiquetas'];?></td>
		
				<td><?php echo $row['idautor'];?></td>
			<td><a href="/plataforma/recursos/Mostrar.php?idarchivo=<?php echo $row['idarchivo']?>"  width='200' download="<?php echo $dato ?>">Descargar</a></td>
		
			</tr>

			<?php

			  }} ?>
	
		</table>
	</div>

    </div>
	</body>
</html>