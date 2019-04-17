<?php
	session_start();
	//error_reporting(0);
	
	$varsesion = $_SESSION['usuario'];
	if($varsesion = null && $varsesion = ''){
		echo 'sin autorizacion';
		die();
	}

	session_destroy();
	header("Location: /plataforma/index.html");
?>



