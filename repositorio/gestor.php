<?php
	session_start();
	if(isset($_GET['area'])){
		$area = $_GET['area'];

		include_once 'conexion/conectar.php';
		$sql = "SELECT idarea FROM areaconocimiento WHERE area='".$area."'";
		$fila = mysqli_query($mysql,$sql)->fetch_array();
		$area = "area=".$fila[0];
	}

	if(!isset($_SESSION['identidadUSR'])){
		//echo "No tiene permiso.";
		//die();
		$_SESSION['sesionglobal'] = "KIU54IKIO5L78O";
		header("Location: cursos/publicar/visualizar.php?".$area);
	}
	//echo "Identidad USR: ".$_SESSION['identidadUSR'];
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Gestor Contenido</title>
	<link rel="stylesheet" type="text/css" href="css/gestor.css">
</head>

<body>

	<!--BOTON CERRAR SESION-->
	<div align="right">
		<form action="../admin/cerrar-sesion.php" method="post">
			<input class="cerrar_sesion" type="submit" value="Cerrar Sesión"/></form>
	</div>

	<center>
	<div class='home-box-fifth-wrap'>
		<div class='row'>
			<div class='large-12 columns'>
				<div class='home-box-fifth'>
					<div class='home-box-fifth-top-bg bg-one'>
						<div class='icon-circle icon-002B51'>
							<div class='icon-hands'></div>
						</div>
					</div>
					<div class='hbf-lower-content'>
						<div class='hbf-title'>Crear Contenido</div>
						<div class='hbf-text'>Elaborar temas de aprendizaje.</div>
					</div>
					<div class='hbf-more' style="bottom: 95px;"><a href='cursos/publicar/crear.php?<?php echo $area;?>' target="_blank">CREAR CURSO</a></div><br>
					<div class='hbf-more'><a href='cursos/publicar/cuestionario.php?<?php echo $area;?>' target="_blank">CREAR TEST</a></div>
				</div>	

				<div class='home-box-fifth hbf-5'>
					<div class='home-box-fifth-top-bg bg-two'>
						<div class='icon-circle icon-light-blue'>
							<div class='icon-paper'></div>
						</div>
					</div>
					<div class='hbf-lower-content'>
						<div class='hbf-title'>Ver Cursos</div>
						<div class='hbf-text'>Acceso a los cursos de aprendizaje.</div>
					</div>
					<div class='hbf-more'><a href='cursos/publicar/visualizar.php?<?php echo $area;?>' target="_blank">Visualizar</a></div>
				</div>	

				<div class='home-box-fifth hbf-3'>
					<div class='home-box-fifth-top-bg bg-three'>
						<div class='icon-circle icon-3-bg'>
							<div class='icon-case'></div>
						</div>
					</div>
					<div class='hbf-lower-content'>
						<div class='hbf-title'>Modificar Cursos</div>
						<div class='hbf-text'>Realizar cambios en cursos publicados.</div>
					</div>
					<div class='hbf-more'><a href='cursos/editar/visualizar.php?<?php echo $area;?>' target="_blank">Modificar</a></div>
				</div>	

				<div class='home-box-fifth hbf-4'>
					<div class='home-box-fifth-top-bg bg-four'>
						<div class='icon-circle icon-4-bg'>
							<div class='icon-logo'></div>
						</div>
					</div>
					<div class='hbf-lower-content'>
						<div class='hbf-title'>Subir Recursos</div>
						<div class='hbf-text'>Cargar documentos, imagenes videos, etc.</div>
					</div>
					<div class='hbf-more'><a href='cursos/subir/visualizar.php?<?php echo $area;?>' target="_blank">Subir</a></div>
				</div>	
			</div>
		</div>
	</div>
	</center>
	

</body>
</html>
