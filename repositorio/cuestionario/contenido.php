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
	<title>Preguntas Cuestionario</title>
	<link rel="stylesheet" type="text/css" href="../css/cuestionario.css">
</head>
<?php
$tabla = 'test_curso';
$objetivo = 'idtest';

include "../conexion/conectar.php";
include "../incremento_tabla.php";
?>
<body class="cuerpo">

	<div class="container">
	  	<h1>Preguntas cuestionario</h1>

	  	
		<form method="POST" action="publicar.php">
			<input type="hidden" name="titulo" value="<?php echo $_POST['titulo']; ?>">
			<input type="hidden" name="preguntas" value="<?php echo $_POST['preguntas']; ?>">
			<input type="hidden" name="respuestas" value="<?php echo $_POST['respuestas']; ?>">
				<input type="hidden" name="idcurso" value="<?php echo $_POST['idcurso']; ?>">
			<?php
			$titulo = $_POST['titulo'];
			$preguntas = $_POST['preguntas'];
 			$opcion = $_POST['respuestas'];
			$n = 1;
			while($n<=$preguntas){
	 			echo "
				<div class='borde'>
					<div class='grupo-form'>
					  <label for='pregunta'>Pregunta ".$n.":</label>
					  <textarea name='ta".$n."'  placeholder='Ingrese la pregunta' class='pregunta'>la pregunta es ".$n."</textarea>
					</div>	
				";
					$op = 1;
					while ($op<=$opcion) {
						echo "
							<div class='grupo-form'>
							  	<label for='opcion".$op."'>opción ".$op.":</label>
							 </div>
							  <textarea name='".$n."-".$op."' placeholder='Ingrese la opción' class='respuesta'>".$n."-".$op."</textarea>
					  	";
				  		$op = $op +1;
			  		}
			  		?>
			  		<br><br>
			  		<label>RESPUESTA: </label>
			  		<select name="rc<?php echo $n; ?>">
			  			<?php $op = 1;
							while ($op<=$opcion) {
								echo "<option value='$op'>$op</option>";
								$op++;
							}  
						?>
			  			
			  		</select>
			  		<?php
			  	echo "
					</div>
					<br>
				";
				$n = $n+1;
			}

			?>

			<br><br>			
			<input type="submit" class="boton" value="Crear cuestionario">
			
		</form>
	</div>
	
</body>
</html>

