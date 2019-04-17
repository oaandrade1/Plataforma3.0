<?php
	require('Conexion.php');
	$id_imagen = $_GET['id'];
	$sql = "DELETE FROM imagenes WHERE id_imagen='$id_imagen'";
	if ($conexion->query($sql) === TRUE) {
	    //echo "Documento eliminado exitosamente";
	    //header ("Location: vistabuscarDoc.html");
	     echo '<script language="javascript">alert("Imagen eliminada exitosamente");window.location="vistabuscarDoc.html";</script>';
	} else {
	    echo "Error al eliminar la imagen: " . $conexion->error;
	}
	$conexion->close();
?>

