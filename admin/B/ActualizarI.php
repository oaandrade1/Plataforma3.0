<?php
	require('Conexion.php');
	$id_imagen = $_REQUEST['txtid'];
	$titulo=$_REQUEST['txttitulo'];
	$descripcion=$_REQUEST['txtdescripcion'];


	$sql = "UPDATE imagenes SET titulo='$titulo', descripcion='$descripcion' WHERE id_imagen='$id_imagen'";
	if ($conexion->query($sql) === TRUE) {

        echo '<script language="javascript">alert("REGISTRO MODIFICADO EXITOSAMENTE");window.location="vistabuscarImg.html";</script>';
	} else {
	    echo "Error updating record: " . $sql . "<br>" . $conexion->error;
	}
	$conexion->close();
?>