<?php

	session_start();
	if(!isset($_SESSION['identidadUSR'])){
	echo "No tiene permiso.";
	die();
	}

	$idautor = $_SESSION['identidadUSR'];
	$idcurso = $_POST['idcurso'];

	$tema = $_POST['tema'];
	echo "<br>";
	$detalle = $_POST['detalle'];
  	echo "<br>";
	$contenido = $_POST['curso_contenido'];
  	//$contenido = "Bienvenido 'Carl'";
	$contenido = str_replace("'","''",$contenido);

	//echo $contenido;

	$sql = "UPDATE cursos SET titulo='".$tema."', descripcion='".$detalle."', contenido='".$contenido."' WHERE idcurso='".$idcurso."' AND idautor=".$idautor;

	include_once '../../conexion/conectar.php';
	//echo "SQL: ".$sql;
	$editar = mysqli_query($mysql,$sql);

	header("Location: ../publicar/contenido.php?id=".$idcurso);

	//echo "Editar: ".$editar;
?>
<script>
	if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>