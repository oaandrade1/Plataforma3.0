<?php
	session_start();
	if(isset($_POST['contenedor_curso'])&&isset($_SESSION["forodc39"])){
		if($_SESSION["forodc39"]=="POD7868F4G51TE7"){
			$_SESSION["forodc39"] = "NULL";
			$contenido = $_POST['contenedor_curso'];
			$longitud = strlen(str_replace("&nbsp;","",str_replace(" ","",$contenido)));
			//echo "Longitud: ".$longitud;
			if($longitud>5){
				$idusuario = $_SESSION['identidadUSR'];
				$tema = $_POST['tema'];
				$detalle = $_POST['detalle'];
				/*echo "<br><br><br>";
				echo "Titulo: ".$GLOBALS["tema"];
				echo "<br><br><br>";
				echo "Autor: ".$GLOBALS["autor"];
				echo "<br><br><br>";
				echo "Descripcion: ".$GLOBALS["detalle"];
				echo "<br><br><br>";
				echo "<div>".$GLOBALS["contenido"]."</div>";
				echo "<br><br><br>";*/
				include_once '../conexion/conectar.php';

				$objetivo = "idforo";
				$tabla = "foros";
				include_once '../incremento_tabla.php';

				$contenido = str_replace("'","''",$contenido)."<br>";
				$sql = "INSERT INTO foros values('".$id."','".$tema."','".$detalle."','".$contenido."','".$idusuario."','".$_POST['idcurso']."')";
				mysqli_query($mysql,$sql);
				//echo "<script>alert('Enviado..2')</script>";
				//printf("Errormessage: %s\n", mysqli_error($mysql));;
				//echo $sql;
				//session_destroy();
				$dato = "id=".$id;

				echo "<script>window.location.href = 'contenido.php?".$dato."';</script>";

			}	
		}	
	}

?>

