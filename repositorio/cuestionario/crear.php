<?php
	session_start();
	if(!isset($_SESSION['identidadUSR'])){
		echo "No tiene permiso.";
		die();
	}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Crear Cuestionario</title>
	<link rel="stylesheet" type="text/css" href="../css/cuestionario.css">
</head>
<body class="cuerpo">

	<div class="container">
	  	<h1>Crear cuestionario</h1>
			<p>Ingrese detalles del cuestionario.</p>
		<form method="POST" action="contenido.php">
			<input type="hidden" name="idcurso" value="<?php echo $_GET['idcurso'];?>">
			<div class="grupo-form">
			  <label for="titulo">Titulo:</label>
			  <input class="titulo" type="text" name="titulo" id="titulo" placeholder="Tema del cuestionario" maxlength="100" required>
			</div>			
			<div class="grupo-form">
			  <label for="preguntas">Número de preguntas:</label>
			  <input type="number" name="preguntas" id="preguntas" placeholder="Ingrese el número de preguntas" min="1" max="60" pattern="[0-9]+" value="10" required>
			</div>
			<div class="grupo-form">
			  <label for="respuestas">Número de opciones por pregunta:</label>
			  <input type="number" name="respuestas" id="respuestas" placeholder="Ingrese el número de respuestas" min="1" max="5" pattern="[0-9]+" value="2" required>
			</div>
			<input type="submit" class="boton" value="Crear cuestionario">
		</form>
	</div>
	
</body>
</html>

