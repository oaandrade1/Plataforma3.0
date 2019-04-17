<?php
	$servidor = "127.0.0.1";
	$usuario = "root";
	$contrasenia = "";
	$nombreDb = "plataforma";
	// Create connection
	$conectar = new mysqli($servidor, $usuario, $contrasenia, $nombreDb);
	// Check connection
	if ($conectar->connect_error) {
	    die("Error de Conexión: " . $conectar->connect_error);
	    $conectar->close();
	} 
	
?>