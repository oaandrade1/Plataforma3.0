<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cargar Juego</title>
</head>
<link rel="stylesheet" type="text/css" href="css/formulario.css">

<body>

	<!-- Wrapper -->
	<div class="wrapper">
		<!-- Formulario -->
		<form action="agregarJUEGO.php" class="login" autocomplete="off" method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>" enctype="multipart/form-data">
			<h2>Subir Juego</h2>
			
			<!-- Contenedor del Formulario -->
			<div class="login-container">
				
				<label>Titulo</label>
				<input type="text" name="titulo" placeholder="Ingresar titulo">

				<label>Descripcion</label>
				<input type="text" name="descripcion" placeholder="Ingresar descripción">


				<label>Etiquetas</label>
				<input type="text" name="etiquetas" placeholder="Ingresar etiquetas">

				<label>Subir archivo</label>
				<input type="file" name="archivo" >

	<input type="submit" class="boton" name="guardar" value="Guardar">
	
			</div>
		</form>
	</div>


<!--SUBIR JUEGO -->



</body>
</html>