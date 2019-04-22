<html>
<head>
	<meta charset="utf-8">
	<title>Contenido</title>
	<link rel="stylesheet" type="text/css" href="../../css/contenido.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

	<?php	
		include_once '../../conexion/conectar.php';
		$idfocus = $_GET['id'];
		$sql = "SELECT titulo,contenido,idautor FROM cursos WHERE idcurso=".$idfocus;
		$r = mysqli_query($mysql,$sql);
		$fila = $r->fetch_array();

		$idautor = $fila[2];

		$sql = "SELECT concat(nombre,' ',apellido) FROM usuarios WHERE idautor=".$idautor;

		$autor = mysqli_query($mysql,$sql)->fetch_array();

	?>

	<!-- MENU DE RECURSOS -->

	<div ng-app="comments" ng-controller="commentsCtrl">
		<ul class="menu_recursos">
			<li ng-repeat="comment in comments" class="menu_contenedor">
				<center>

				<form class="menu_form" action="recursos.php?rpa=1" target="_blank" method="POST">
					<input class="submenu" type="submit" name="seccion" value="Imagenes">
					<input type="hidden" name="idcurso" value="<?php echo $idfocus;?>">
					<input type="hidden" name="idautor" value="<?php echo $idautor;?>">
				</form>
				
				<form class="menu_form" action="recursos.php?rpa=2" target="_blank" method="POST">
					<input class="submenu" type="submit" name="seccion" value="Documentos">
					<input type="hidden" name="idcurso" value="<?php echo $idfocus;?>">
					<input type="hidden" name="idautor" value="<?php echo $idautor;?>">
				</form>
				<form class="menu_form" action="recursos.php?rpa=3" target="_blank" method="POST">
					<input class="submenu" type="submit" name="seccion" value="Videos">
					<input type="hidden" name="idcurso" value="<?php echo $idfocus;?>">
					<input type="hidden" name="idautor" value="<?php echo $idautor;?>">
				</form>
				<form class="menu_form" action="recursos.php?rpa=4" target="_blank" method="POST">
					<input class="submenu" type="submit" name="seccion" value="Audio">
					<input type="hidden" name="idcurso" value="<?php echo $idfocus;?>">
					<input type="hidden" name="idautor" value="<?php echo $idautor;?>">
				</form>
				<form class="menu_form" action="recursos.php?rpa=5" target="_blank" method="POST">
					<input class="submenu" type="submit" name="seccion" value="Juegos">
					<input type="hidden" name="idcurso" value="<?php echo $idfocus;?>">
					<input type="hidden" name="idautor" value="<?php echo $idautor;?>">
				</form>
				<form class="menu_form" action="recursos.php?rpa=6" target="_blank" method="POST">
					<input class="submenu" type="submit" name="seccion" value="Ver-Foros">
					<input type="hidden" name="idcurso" value="<?php echo $idfocus;?>">
					<input type="hidden" name="idautor" value="<?php echo $idautor;?>">
					<input type="hidden" name="nombre_curso" value="<?php echo $fila[0];?>">
				</form>
				<form class="menu_form" action="recursos.php?rpa=7" target="_blank" method="POST">
					<input class="submenu" type="submit" name="seccion" value="Crear-Foro">
					<input type="hidden" name="idcurso" value="<?php echo $idfocus;?>">
					<input type="hidden" name="idautor" value="<?php echo $idautor;?>">
				</form>
				<form class="menu_form" action="recursos.php?rpa=8" target="_blank" method="POST">
					<input class="submenu" type="submit" name="seccion" value="Test">
					<input type="hidden" name="idcurso" value="<?php echo $idfocus;?>">
					<input type="hidden" name="idautor" value="<?php echo $idautor;?>">
				</form>
		
				</center>
			</li>
		</ul>
	</div>

	<div id="main">
	  <h1 id="title" style="text-align: center; margin-top: 18px;"><?php echo $fila[0]; ?></h1>
	  <div style="margin: 20px;"><?php echo $fila[1]; ?></div>
	  <blockquote class="autor">Autor: <em><?php echo $autor[0]; ?></em></blockquote>
	</div>

	
	<link rel="stylesheet" type="text/css" href="../../css/comentario.css">
	<script type="text/javascript" src="../../editor/js/jquery-1.12.0.js"></script>

	<?php		
		/*echo $_SESSION["comentario_sesion".$idcurso];*/
		$parametro = "'".$idfocus."',null";
		$foro_curso = "idcurso";
		$directorio = "../..";
		include_once '../../comentario/comentarios.php';
	?>

	<form method="POST" onsubmit="return submitUserForm();" action="#">
		 <center><div class="g-recaptcha" data-sitekey="6LfBbp8UAAAAANjaQGKd_PJtlxTYyTx44SXMZO-X" data-callback="verifyCaptcha"></div>
    <div id="g-recaptcha-error"></div></center>
		<div ng-app="comments" ng-controller="commentsCtrl">
			<ul class="ul_comentario">
			<li ng-repeat="comment in comments" class="comentario_contenedor">
		        <header>
		          <h1 id="comentario_caja" class="comentario_caja"></h1>
		        </header>
		        <input type="text" id="usuario_comentario" name="usuario_comentario" required placeholder="Nombre usuario" value="">
		        <textarea id="comentario_area" name="comentario_area" required maxlength="800" placeholder="COMENTARIO"></textarea>
		        <input type="submit" id="comentario_enviar" name="comentario_enviar" value="ENVIAR">
		        <!--
		        <input type="submit" id="comentario_enviar" name="comentario_enviar" onclick="comentario_usuario()" value="ENVIAR">
		    	-->
		     	</li>
		    </ul>
		</div>
	</form>

	<br>

	<script>
    	if ( window.history.replaceState ) {
	        window.history.replaceState( null, null, window.location.href );
	    }
	</script>

	<script>
function submitUserForm() {
    var response = grecaptcha.getResponse();
    if(response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        return false;
    }
    return true;
}
 
function verifyCaptcha() {
    document.getElementById('g-recaptcha-error').innerHTML = '';
}
</script>

</body>
</html>
