<?php 
	
	$sql = "SELECT ".$objetivo." FROM ".$tabla." ORDER BY ".$objetivo." DESC";
	$r = mysqli_query($mysql,$sql);
	$fila = $r->fetch_array();
	$id = $fila[0];
	if(empty($id)){
		$id = 1;
	}else{
		$id++;
	}

?>