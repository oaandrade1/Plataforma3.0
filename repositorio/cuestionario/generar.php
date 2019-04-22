<?php
	if(isset($_POST['numpreguntas'])&&isset($_POST['numopciones'])){
		$numpreguntas = $_POST['numpreguntas'];
		$numopciones = $_POST['numopciones'];
		$idtest = $_POST['idtest'];
		$nombre = $_POST['nombreusr'];
		$apellido = $_POST['apellidousr'];
		$idcurso = $_POST['idcurso'];
		/*echo "N: ".$_POST['nombreusr'];
		echo "<br>";
		echo "N: ".$_POST['apellidousr'];
		echo "<br>";
		echo "N: ".$numpreguntas;
		echo "<br>";
		echo "<br>";
		echo "R: ".$numopciones;
		echo "<br>";*/
		$t = 1;
		include_once('../conexion/conectar.php');
		$objetivo = 'idusuario';
		$tabla = 'test_historial_curso';
		include_once('../incremento_tabla.php');
		$query="INSERT INTO test_historial_curso (idusuario, idtest, nombre, apellido) VALUES ($id, $idtest, '$nombre', '$apellido')";
		$result = mysqli_query($mysql,$query);
		//echo "consulta: ".$query;
		while ($t<= $numpreguntas) {
			$n = 1;
			echo "<br>";
			while ($n<=$numopciones) {
				echo "<br>";
				$dato = $_POST[$t.'#'.$n];
				if($dato==1){

		$query="INSERT INTO test_resolucion_curso (idusuario, numpregunta, numopcion) VALUES ($id, $t, $n)";
		mysqli_query($mysql,$query);

					echo $dato;
					break;
				}
				echo "<br>";
				$n++;
			}
			echo "<br>";
			$t++;
		}
		if ($result) {
			echo "
			<script type='text/javascript'>
				alert('CUESTIONARIO ENVIADO EXITOSAMENTE');
				window.location.href='../cursos/publicar/contenido.php?id=$idcurso';
			</script>
			";
		}else{
			?>

			<script type="text/javascript">
				alert("ERROR AL ENVIAR EL CUESTIONARIO");
			</script>
			<?php

		}
	}
?>
