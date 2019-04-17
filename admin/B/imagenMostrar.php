<?php
include_once 'Conexion.php';
if(isset($_GET['id_imagen'])) {
   //BUSQUEDA DE IMAGEN
   $sql = "SELECT tipo,archivo FROM imagenes WHERE id_imagen=".$_GET['id_imagen'];
   //$result = mysqli_query($conectar,$sql);
   	$result = $conexion->query($sql);
   $row = mysqli_fetch_array($result);
   header("Content-type: " . $row["tipo"]);
   echo $row["archivo"];
}
?>

