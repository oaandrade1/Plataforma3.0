<!--   
	# CARGAR EDITOR >> CONTENIDO   
-->
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo $directorio; ?>/editor/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $directorio; ?>/editor/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $directorio; ?>/editor/css/editor.css">

<script type="text/javascript" src="<?php echo $directorio; ?>/editor/js/jquery-1.12.0.js"></script>
<script type="text/javascript" src="<?php echo $directorio; ?>/editor/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $directorio; ?>/editor/js/editor.js"></script>

<section>
	<div id="nav-placeholder"></div>
</section>

<script>
	function editor(op){
		$(function(){
			let contenido = "";
			switch(op){
				case 1:
		  			contenido = "<?php echo $directorio; ?>/Editor/publicar.html";
		  			break;
	  			case 2:
		  			contenido = "<?php echo $directorio; ?>/Editor/modificar.html";
	  				break;
			}
			$("#nav-placeholder").load(contenido);
		});
	}
</script>

<?php
	switch ($opcion) {
		case 1:
			echo "<script>editor(".$opcion.")</script>";
			break;
		case 2:
			echo "<script>editor(".$opcion.")</script>";
			break;
	}
?>

