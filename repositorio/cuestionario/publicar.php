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
	<title>Vista Cuestionario</title>
</head>
<body>

</body>
</html>

<?php
	include_once("../conexion/conectar.php");
	$objetivo = 'idtest';
	$tabla = 'test_curso';
	include_once("../incremento_tabla.php");

	$titulo = $_POST['titulo'];
	$preguntas = $_POST['preguntas'];
	$opcion = $_POST['respuestas'];
	$idcurso = $_POST['idcurso'];

	$query = "INSERT INTO test_curso (idtest, idcurso, titulo) VALUES ($id, $idcurso, '$titulo')";
	//echo "consulta: ".$query;
	$estado = mysqli_query($mysql,$query);

	$n = 1;
	/*
	echo "consulta1 ".$preguntas;
	echo "<br>";
	echo "consulta2 ".$opcion;
	echo "<br>";
	*/
	while ( $n <= $preguntas) {
		$preg = $_POST['ta'.$n];
		$resp = $_POST['rc'.$n];
		$query = "INSERT INTO test (idtest, numpregunta, pregunta, respuesta) VALUES ($id, $n, '$preg', $resp )";
		mysqli_query($mysql,$query);
		//echo "consulta3: ".$_POST['ta'.$n];
		//echo "<br>";
		$op = 1;
		while ($op <= $opcion) {
			$opcion_pregunta = $_POST[$n.'-'.$op];
			$query = "INSERT INTO test_opciones (idtest, numpregunta, numopcion, opcion_pregunta) VALUES ($id, $n, $op, '$opcion_pregunta')";
			//echo "consulta: ".$query;
			mysqli_query($mysql,$query);
			//echo "consulta4: ".$_POST[$n.'-'.$op];
			//echo "<br>";
			$op++;
		}
		$n++;
	}

	if ($estado) {
?>
<script type="text/javascript">
	alert("CUESTIONARIO CREADO");
</script>
<?php  

	}else{
		?>
		<script type="text/javascript">
			alert("ERROR AL CREAR CUESTIONARIO");
		</script>
		<?php
	}
?>


