<?php
	require('Conexion.php');
	$id_documento = $_REQUEST['txtid'];
	$titulo=$_REQUEST['txttitulo'];
	$descripcion=$_REQUEST['txtdescripcion'];


	$sql = "UPDATE documentos SET titulo='$titulo', descripcion='$descripcion' WHERE id_documento='$id_documento'";
	if ($conexion->query($sql) === TRUE) {

        echo '<script language="javascript">alert("REGISTRO MODIFICADO EXITOSAMENTE");window.location="vistabuscarDoc.html";</script>';
	} else {
	    echo "Error updating record: " . $sql . "<br>" . $conexion->error;
	}
	$conexion->close();
?>