<html>
<head>
	<meta charset="utf-8">
	<title>Contenido</title>
	<link rel="stylesheet" type="text/css" href="../css/contenido.css">
</head>
<body>

	<?php
		include_once '../conexion/conectar.php';
		$id = $_GET['id'];
		$sql = "SELECT titulo,contenido FROM cursos WHERE idcurso=".$id;
		$r = mysqli_query($mysql,$sql);
		$fila = $r->fetch_array();

	?>

	<div id="main">
	  <h1 id="title" style="text-align: center;"><?php echo $fila[0]; ?></h1>
	  <div style="margin: 20px;"><?php echo $fila[1]; ?></div>
	  <blockquote class="autor">Autor: <em><?php echo "" ?></em></blockquote>
	</div>

</body>
</html>
