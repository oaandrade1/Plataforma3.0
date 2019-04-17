<html>
<head>
	<meta charset="utf-8">
	<title>Comentarios</title>
	<!--
	<link rel="stylesheet" type="text/css" href="../../css/comentario.css">
	<script type="text/javascript" src="../../editor/js/jquery-1.12.0.js"></script>
	-->
</head>
<body class="cuerpo_comentario">
	<br>
	<!--
	<form method="POST" action="">
	-->
		<div id="cm_contenedor">
			<?php

				if(isset($_POST["comentario_area"])&&isset($_POST["usuario_comentario"])){
					$comentario = $_POST["comentario_area"];
					$usuario = $_POST["usuario_comentario"];

					$objetivo = "idcomentario";
					$tabla = "codigo_comentario";

					include_once ''.$directorio.'/incremento_tabla.php';

					$sqlcurso = "INSERT INTO codigo_comentario VALUES('".$id."',".$parametro.")";
					mysqli_query($mysql,$sqlcurso);
					//echo "SQL1: ".$sql;
					//echo "<br>";
					$sql = "INSERT INTO comentarios VALUES('".$id."','".$usuario."','".$comentario."')";
					mysqli_query($mysql,$sql);
					//echo "SQL2: ".$sql;
					//session_destroy();
					/*$_SESSION["comentario_sesion".$idcurso] = "5555";
					echo "<br><br><br>";
					echo $_SESSION["comentario_sesion".$idcurso];	
					*/
				}

				$sql = "SELECT nombre,comentario FROM codigo_comentario as p INNER JOIN comentarios as c ON p.".$foro_curso." = ".$idfocus." && p.idcomentario = c.idcomentario";

				$r = mysqli_query($mysql,$sql);
				while($fila = $r->fetch_array()){
					$html =	
					'<div ng-app="comments" ng-controller="commentsCtrl">'.
					    '<ul class="ul_comentario">'.
					      '<li ng-repeat="comment in comments">'.
					        '<header>'.
					          '<h1 id="autor" class="author">'.$fila[0].'</h1>'.
					          '<div>'.                      
					            '<button ng-click="reply(comment.author.name)"></button>'.
					          '</div>'.
					        '</header>'.
					        '<p id="comentario">'.$fila[1].'</p>'.
					     ' </li>      '.
					    '</ul>'.
					'</div><br>';
					echo $html;
					/*
					echo "
					<script>
					$(function(){
					  	$('#cm_contenedor').append(
					  		".$html."
							);
				  	});
				  	</script>
					";
					*/										
				}

			?>
		</div>
		<!--
		<input type="submit" id="comentar" name="comentar" onclick="comentario_usuario()" value="Comentar">
		-->
	<!--
	</form>
	-->
	<br>

	<script>
		function comentario_usuario(){
			/*var au = document.getElementById("autor");
			au.innerHTML= "JUM HUO";*/
			console.log("Enviado..");
			let parrafo = document.getElementById("comentario_area");

			let html =	
				'<div ng-app="comments" ng-controller="commentsCtrl">'+
				    '<ul class="ul_comentario">'+
				      '<li ng-repeat="comment in comments">'+
				        '<header>'+
				          '<h1 id="autor" class="author">Sonia Carla</h1>'+
				          '<div>'+                      
				            '<button ng-click="reply(comment.author.name)"></button>'+
				          '</div>'+
				        '</header>'+
				        '<p id="comentario">'+parrafo.value+'</p>'+
				     ' </li>      '+
				    '</ul>'+
				'</div><br>';

		  	$(function(){
			  	$("#cm_contenedor").append(
			  		html
					);
		  	});

		  	window.scrollTo(0,document.body.scrollHeight);
		  	parrafo.value = "";
		}
	</script>

</body>
</html>


