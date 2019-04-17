<?php
	$servidor = "127.0.0.1";
	$usuario = "root";
	$contrasenia = "";
	$nombreDb = "plataforma";
	// Create connection
	$conexion = new mysqli($servidor, $usuario, $contrasenia, $nombreDb);
	// Check connection
	if ($conexion->connect_error) {
	    die("Error de Conexión: " . $conexion->connect_error);
	    $conexion->close();
	} 
	
?>