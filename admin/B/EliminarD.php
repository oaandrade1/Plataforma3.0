<?php
	require('Conexion.php');
	$id_documento = $_GET['id'];
	$sql = "DELETE FROM documentos WHERE id_documento='$id_documento'";
	if ($conexion->query($sql) === TRUE) {
	    //echo "Documento eliminado exitosamente";
	    //header ("Location: vistabuscarDoc.html");
	     echo '<script language="javascript">alert("Documento eliminado exitosamente");window.location="vistabuscarDoc.html";</script>';
	} else {
	    echo "Error al eliminar el documento: " . $conexion->error;
	}
	$conexion->close();
?>

