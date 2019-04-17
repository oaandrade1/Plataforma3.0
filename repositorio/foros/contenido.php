<html>
<head>
	<meta charset="utf-8">
	<title>Contenido</title>
	<link rel="stylesheet" type="text/css" href="../css/contenido.css">
	<link rel="stylesheet" type="text/css" href="../css/foro_publicacion.css">
</head>
<body>

	<?php		
		include_once '../conexion/conectar.php';
		$idfocus = $_GET['id'];
		$sql = "SELECT titulo,contenido FROM foros WHERE idforo=".$idfocus;
		$r = mysqli_query($mysql,$sql);
		$fila = $r->fetch_array();

	?>

		<?php 
			$html =	
			'<div ng-app="comments" ng-controller="commentsCtrl" style="margin-top: 15px;margin-bottom: -15px;">'.
			    '<ul class="ul_foro">'.
			      '<li ng-repeat="comment in comments">'.
			        '<header>'.
			          '<h1 id="autor" class="autor_foro">'.$fila[0].'</h1>'.
			          '<div>'.                      
			            '<button ng-click="reply(comment.author.name)"></button>'.
			          '</div>'.
			        '</header>'.
			        '<div id="contenido_foro">'.$fila[1].'</div>'.
			     ' </li>      '.
			    '</ul>'.
			'</div><br>';
			echo $html;
	 	?>
	</div>

	<link rel="stylesheet" type="text/css" href="../css/comentario.css">
	<script type="text/javascript" src="../editor/js/jquery-1.12.0.js"></script>
	<?php		
		/*echo $_SESSION["comentario_sesion".$idcurso];*/
		$parametro = "null,'".$idfocus."'";
		$foro_curso = "idforo";
		$directorio = "..";
		include_once '../comentario/comentarios.php';
	?>

	<form method="POST" action="#">
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


	<!--
	<div id="main">
	  <h1 id="title" style="text-align: center;"><?php echo $fila[0]; ?></h1>
	  <div style="margin: 20px;"><?php echo $fila[1]; ?></div>
	  <blockquote class="autor">Autor: <em><?php echo "" ?></em></blockquote>
	</div>
	-->

	<script>
    	if ( window.history.replaceState ) {
	        window.history.replaceState( null, null, window.location.href );
	    }
	</script>

</body>
</html>
