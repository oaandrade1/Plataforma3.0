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
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css/formulario.css">

<body>

	<!-- Wrapper -->
	<div class="wrapper">
		<!-- Formulario -->
		<form action="agregarREA.php?area=<?php echo $_GET['area'];?>" class="login" autocomplete="off" method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>" enctype="multipart/form-data">
			<h2>Agregar Imagen, Documento o Video</h2>
			
			<!-- Contenedor del Formulario -->
			<div class="login-container">
				
				<label>Titulo</label>
				<input type="text" name="titulo" placeholder="Ingresar titulo">

				<label>Descripcion</label>
				<input type="text" name="descripcion" placeholder="Ingresar descripción">

				<!--<label>Autor</label>
				<input type="text" placeholder="Ingresar nombre de autor">
				-->
				<input type="hidden" name="autor" value=1>

				<label>Etiquetas</label>
				<input type="text" name="etiquetas" placeholder="Ingresar etiquetas">
				<table border="0">
									<tr>

				<!-- 
				<td>
					<br>
					<label>Área conocimiento</label>
					<select name='areaconocimiento' required>
			         	<option>Seleccionar</option>
			            <option>Matematicas</option>
			            <option>Ciencias Naturales</option>
			        </select>
				</td>
				-->
				</tr>
				<tr>
					<td>
						<!--
						        <label>Tipo de recurso</label>
								<select name='recurso' required>
						         	<option>Seleccionar</option>
						            <option name='Recurso (Documentos, videos ..)' value=1>Recurso (Documentos, videos ..)</option>
						        </select>
						        <input type="hidden" name="recurso11" value=1>
					    -->
				</td>
				</tr>
				<tr>
				<td><br>
							<label>Subir archivo</label>
							<input type="file" name="archivo" >
				</td>
				</tr>
				<tr>
				<td><input type="submit" class="boton" name="guardar" value="Guardar"></td>
				</tr>
			</div>
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
	    $destino = "archivos/" . $nombre;
	    if ($nombre != "") {
	        if (copy($ruta, $destino)) {
	        	$autor = $_SESSION['identidadUSR'];
	            $titulo= $_POST['titulo'];
	            $descri= $_POST['descripcion'];	            
	            $etiquetas= $_POST['etiquetas'];
	            $areaconocimiento = $_GET['area'];
	            $idcurso = $_POST['idcurso'];

	            //$paquete = addslashes(file_get_contents($_FILES['archivo']['tmp_name']));
	            //$paquete = file_get_contents($_FILES['archivo']['tmp_name']);
	            //$paquete = file_get_contents($_FILES["archivo"]["tmp_name"]);
	            

	            //echo "<br>";
	            //echo $paquete;
	            
	            $extension = explode("/",$tipo);

	            if($extension[0]=="video"||$extension[0]=="audio"){

        			$query = false;


				}else{

					$fp = fopen($ruta,"rb");
		            $paquete = fread($fp,$tamanio);
		            $paquete = addslashes($paquete);
		            fclose($fp);

					$db=new Conect_MySql();

		            $sql = "INSERT INTO archivos(titulo,descripcion,idautor,etiquetas, areaconocimiento,archivo,tipo,tamanio,idcurso) VALUES('$titulo','$descri',$autor,'$etiquetas','$areaconocimiento','$paquete','$tipo',$tamanio,'$idcurso')";
		            
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

	        } else {
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