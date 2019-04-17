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
	<title>Crear Curso</title>
	<link rel="stylesheet" type="text/css" href="../../css/formulario.css">
</head>
<body class="cuerpo">

	<div class="container">
	  	<h1>Departamento Curso</h1>
			<p>Ingrese detalles del curso.</p>
		<form method="POST" action="publicar.php">
			<input type="hidden" name="area" value="<?php echo $_GET['area'];?>">
			<div class="grupo-form">
			  <label for="tema">Titulo:</label>
			  <input name="tema" id="tema" placeholder="Tema del curso">
			</div>			
			<div class="grupo-form">
			  <label for="detalle">Descripción:</label>
			  <input name="detalle" id="detalle" placeholder="Detalles del curso">
			</div>
			<?php
				$directorio = "../..";
				$opcion = 1;
				include_once '../../editor/invocar.php';
				
				$_SESSION["cursodc39"] = "POD7868F4G51TE7";
			?>
		</form>
	</div>
	
</body>
</html>

