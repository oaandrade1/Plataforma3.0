<?php
	session_start();
	if(!isset($_SESSION['identidadUSR'])){
		echo "No tiene permiso.";
		die();
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Subir archivos</title>
</head>
<link rel="stylesheet" type="text/css" href="css/formulario.css">

<body>

	<!-- Wrapper -->
	<div class="wrapper">
		<!-- Formulario -->
		<form action="agregarREA.php" class="login" autocomplete="off" method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>" enctype="multipart/form-data">
			<h2>Agregar Imagen, Documento o Video</h2>
			
			<!-- Contenedor del Formulario -->
			<div class="login-container">
				
				<label for="titulo">Titulo</label>
				<input type="text" name="titulo" id="titulo" title="titulo" placeholder="Ingresar titulo">

				<label title="descripcion" for="descripcion">Descripcion</label>
				<input type="text" id="descripcion" name="descripcion" title="descripcion" placeholder="Ingresar descripción">
				<!--<label>Autor</label>
				<input type="text" placeholder="Ingresar nombre de autor">
				<input type="hidden" name="autor" value=1>-->

				<label for="etiquetas">Etiquetas</label>
				<input type="text" name="etiquetas" id="etiquetas" title="etiquetas" placeholder="Ingresar etiquetas">

				<label for="pais">País</label>
				<input type="text" name="pais" id="pais" title="pais" value="Ecuador">

				<input type="date"  name="fecha" value="<?php echo date("Y-m-d");?>" style="visibility:hidden">

				<input type="hidden" name="idioma" value="es">

				<input type="hidden" name="licencia" value="reutilización no comercial">

				<label for="textoalt">Texto alternativo (si el recurso es una imagen)</label>
				<input type="text" name="textoalt" id="textoalt" title="texto alternativo" placeholder="Ingresar texto alternativo" title="Si es un recurso de tipo imagen, agregue texto alternativo">
				<br>
				<label for="archivo">Subir archivo</label>
				<input type="file" name="archivo" title="archivo" id="archivo">
				</td>
				</tr>
				<tr>
				<td><input type="submit" class="boton" name="guardar" value="Guardar"></td>
				</tr>
			</div>
			<input type="hidden" name="area" value="<?php echo $_POST['area'];?>">
			<input type="hidden" name="idcurso" value="<?php echo $_POST['idcurso'];?>">
			<input type="hidden" name="enviado" value="1">
		</form>
	</div>

	<!--SUBIR DOCUMENTO -->

	<?php
	include_once 'conexionrea.php';

	if (isset($_POST['enviado'])&&$_POST['enviado']=="1"&&isset($_POST['guardar'])) {
	    $nombre = $_FILES['archivo']['name'];
	    $tipo = $_FILES['archivo']['type'];
	    $tamanio = $_FILES['archivo']['size'];
	    $ruta = $_FILES['archivo']['tmp_name'];
	    if ($nombre != "") {
        	$autor = $_SESSION['identidadUSR'];
            $titulo= $_POST['titulo'];
            $descri= $_POST['descripcion'];	            
            $etiquetas= $_POST['etiquetas'];
            $pais= $_POST['pais'];
            $fecha= $_POST['fecha'];
            $idioma= $_POST['idioma'];
            $licencia= $_POST['licencia'];
            $textoalt= $_POST['textoalt'];
            $idcurso = $_POST['idcurso'];
            
            $extension = explode("/",$tipo);

            if($extension[0]=="video"||$extension[0]=="audio"){

            	if(is_uploaded_file($ruta)) {
			        // creamos las variables para subir a la db
			        $seccion = ($extension[0]=="video")?"videos/":"audios/";
			        $ruta_servidor = "archivos/".$seccion;				        
			        //$nombre_archivo = str_replace("/\s/","",$nombre);
			        $nombre_archivo = str_replace("-","_",$nombre);

			        /*
	       	 		# FORMATO
	            	area_autor_curso_nombrearchivo.mp3
	            	1_2_4_alejandro
			        */

			        // Linea 124: $nombre_archivo > separar el nombre con explode por . Ejemplo camila.mp3

			        $nombre_archivo = $_POST['area']."-".$autor."-".$idcurso."-".$nombre_archivo;
			        
			        $ruta_servidor = $ruta_servidor . $nombre_archivo;  

			        /*echo "<br>";
			        echo "Ruta: ".$ruta_servidor;
			        echo "<br>";*/
			       
			        if(move_uploaded_file($ruta,$ruta_servidor)) { //movemos el editor a su ubicacion 

		          		$db=new Conect_MySql();

		            	$sql = "INSERT INTO archivos(titulo,descripcion,idautor,etiquetas,tipo,tamanio,idcurso,ruta,cobertura, fecha, idioma, licencia, textoalt) VALUES('$titulo','$descri',$autor,'$etiquetas','$tipo',$tamanio,'$idcurso','$ruta_servidor','$pais','$fecha','$idioma','$licencia','$textoalt')";
		            
		           	 	$query = $db->execute($sql);
		           	 	//echo "SQL: ".$sql;

		           	 	//$query = false;

			        }
			    }  

			}else{

				$fp = fopen($ruta,"rb");
	            $paquete = fread($fp,$tamanio);
	            $paquete = addslashes($paquete);
	            fclose($fp);

				$db=new Conect_MySql();

	            $sql = "INSERT INTO archivos(titulo,descripcion,idautor,etiquetas,archivo,tipo,tamanio,idcurso,cobertura, fecha, idioma, licencia, textoalt) VALUES('$titulo','$descri',$autor,'$etiquetas','$paquete','$tipo',$tamanio,'$idcurso','$pais','$fecha','$idioma','$licencia','$textoalt')";
	            
	            $query = $db->execute($sql);
	            //echo "<script>alert('".$extension[0]."')</script>";
	            
        	}

        	if($query){
                ?>
                <script>
    				alert("ARCHIVO GUARDADO CORRECTAMENTE.");
				</script>
                <?php
   	 		}else{
   	 			?>
   	 			<script>
    				alert("ERROR AL GUARDAR!");
				</script>
   	 			<?php
   	 		}
        }
    }
	?>

	<script>
    	if (window.history.replaceState) {
	        window.history.replaceState(null, null, window.location.href);
	    }
	</script>

</body>
</html>