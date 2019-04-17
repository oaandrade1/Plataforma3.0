<?php
//include_once '../../conexion/conectar.php';
if(isset($_GET['ida'])) {
   //BUSQUEDA DE IMAGEN
   //$sql = "SELECT tipo,archivo FROM archivos WHERE idarchivo=".$_GET['ida'];
   //echo "SQL 78 > ".$sql;
   //$result = mysqli_query($conectar,$sql);
   //echo "SQL34: ".$sql;
	//$result = $mysql->query($sql);
	//$row = mysqli_fetch_array($result);
	header("Content-type: " .$_GET['tipo']);
	echo $_GET['archivo'];
}
?>
