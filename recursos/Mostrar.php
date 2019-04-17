<?php
include_once 'Conexion.php';
if(isset($_GET['idarchivo'])) {
   //BUSQUEDA DE IMAGEN
   $sql = "SELECT tipo,archivo FROM archivos WHERE idarchivo=".$_GET['idarchivo'];
   //echo "SQL 78 > ".$sql;
   //$result = mysqli_query($conectar,$sql);
   //echo "SQL34: ".$sql;
	$result = $conexion->query($sql);
	$row = mysqli_fetch_array($result);
	header("Content-type: " . $row["tipo"]);
	echo $row["archivo"];
}
?>
