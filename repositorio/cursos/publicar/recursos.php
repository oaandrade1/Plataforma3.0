<?php
	if(isset($_GET['rpa'])&&isset($_POST['seccion'])){
		$rpa = $_GET['rpa'];
		$seccion = $_POST['seccion'];
	}else{
		die();
	}
?>
<html>
<head>
  <meta charset="utf-8">
	<title><?php echo $seccion; ?></title>
	<link rel="stylesheet" type="text/css" href="../../css/foro.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	
</head>
<body>

<div class="row">
  <div id="admin" class="col s12">
    <div class="card material-table">
      <div class="table-header">
        <span class="table-title"><?php echo strtoupper($seccion); ?></span>
        <div class="actions">
          <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
        </div>
      </div>
      <table id="datatable">
        <thead>
          <tr>
            <th>Titulo</th>
            <th>Recurso</th>
            <th>Enlace</th>
          </tr>
        </thead>
        <tbody>
			<?php
				include_once '../../conexion/conectar.php';

				switch ($rpa) {
					case 1:
					$sql = "SELECT titulo,idautor,archivo,tipo FROM archivos WHERE idautor=".$_POST['idautor']." AND idcurso=".$_POST['idcurso']." AND tipo LIKE '%image/%'";
						break;
					case 2:	
					$sql = "SELECT titulo,idautor,archivo,tipo FROM archivos WHERE idautor=".$_POST['idautor']." AND idcurso=".$_POST['idcurso']." AND tipo NOT LIKE '%image/%' AND tipo NOT LIKE '%video/%' AND tipo NOT LIKE '%audio/%'";
						break;
					case 3:
					$sql = "";
						break;
					case 4:
					$sql = "";
						break;
					case 5:
					$sql = "";
					
						break;
					case 6:
					header("Location: ../../foros/visualizar.php?idcurso=".$_POST['idcurso']."&curso=".$_POST['nombre_curso']);
						break;
					case 7:
					header("Location: ../../foros/crear.php?idcurso=".$_POST['idcurso']);
						break;
				}
				
				//echo "SQL: ".$sql;

				if(!empty($sql)&&$r = mysqli_query($mysql,$sql)){
					$sql = "SELECT concat(`nombre`,' ',`apellido`) FROM usuarios WHERE idautor = ".$_POST['idautor'];
					$autor = mysqli_query($mysql,$sql)->fetch_array()[0];
					$n = 1;
					while($fila = $r->fetch_array()){

						//header("Content-type: " .$fila[3];
						$extension = explode("/",$fila[3]);
						$dato = $fila[0].".".$extension[1];
						$base64 = base64_encode($fila[2]);
						echo "
						  <tr>
						    <td>".$fila[0]."</td>
						    <td>
						    ";

						
					    if($extension[0]=="image"){
					    	$recurso = "
						    <img id='im".$n."' src='data:".$fila[3].";base64,".$base64."' width='120px' height='100px' alt='No existe vista previa.'>
						    ";
					    }else{
					    	$recurso = strtoupper($extension[1]);
					    }

					    echo "
					    	".$recurso."
						    </td>            
						    <td>
						      <strong>
						      <u>
						      	<a href='data:".$fila[3].";base64,".$base64."' download='".$dato."'>Descargar</a>
						      </u>
						      </strong>
						    </td>
						  </tr> 
						";
						$n++;
					}
				}
			?>

			<!--
			<a style='cursor: pointer;' onclick='descargar(im".$n.")' >Descargar</a>
			-->



        </tbody>
      </table>
    </div>
  </div>
</div>

<script>
	function descargar(img){
		//console.log(ruta);
		//var img = document.getElementById(ruta);
		var url = img.src.replace(/^data:image\/[^;]+/, 'data:application/octet-stream');
		window.open(url);
	}
</script>

<script src="../../js/jquery.js"></script>
<script src="../../js/datos.js"></script>

<script src="../../js/tabla.js"></script>

</body>
</html>