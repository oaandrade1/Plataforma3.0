<?php
	session_start();
	if(isset($_POST['contenedor_curso'])&&isset($_SESSION["cursodc39"])){
		if($_SESSION["cursodc39"]=="POD7868F4G51TE7"){
			$_SESSION["cursodc39"] = "NULL";
			$contenido = $_POST['contenedor_curso'];
			$longitud = strlen(str_replace("&nbsp;","",str_replace(" ","",$contenido)));
			//echo "Longitud: ".$longitud;
			if($longitud>5){
				$idusuario = $_SESSION['identidadUSR'];
				$tema = $_POST['tema'];
				$detalle = $_POST['detalle'];
				$idarea = $_POST['area'];
				/*echo "<br><br><br>";
				echo "Titulo: ".$GLOBALS["tema"];
				echo "<br><br><br>";
				echo "Autor: ".$GLOBALS["autor"];
				echo "<br><br><br>";
				echo "Descripcion: ".$GLOBALS["detalle"];
				echo "<br><br><br>";
				echo "<div>".$GLOBALS["contenido"]."</div>";
				echo "<br><br><br>";*/
				include_once '../../conexion/conectar.php';

				$objetivo = "idcurso";
				$tabla = "cursos";
				include_once '../../incremento_tabla.php';

				$contenido = str_replace("'","''",$contenido)."<br>";

				$sql = "INSERT INTO cursos values('".$id."','".$tema."','".$detalle."','".$contenido."','".$idusuario."')";
				$sqlcurso_area = "INSERT INTO curso_area(idcurso,idarea) VALUES('".$id."','".$idarea."')";

				mysqli_query($mysql,$sql);
				mysqli_query($mysql,$sqlcurso_area);
				//echo "<script>alert('Enviado..2')</script>";
				echo "<br><br><br><br><br><br>";
				echo "<br><br><br><br><br><br>";			
				//printf("Errormessage: %s\n", mysqli_error($mysql));;
				//echo $sql;
				echo "<br><br><br><br><br><br>";
				echo "<br><br><br><br><br><br>";
				//session_destroy();
				$dato = "id=".$id;

				echo "<script>window.location.href = 'contenido.php?".$dato."';</script>";

			}		
		}
	}

?>

