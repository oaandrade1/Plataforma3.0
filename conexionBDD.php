
<!--
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

-->
<?php

$host="localhost";
$user="root";
$pw="";
$db="plataforma";

function Conectarse()  
{  
   if (!($link=mysql_connect($host="localhost",$user="root",$pw="")))  
   {  
      echo "Error conectando a la base de datos.";  
      exit();  
   }  
   if (!mysql_select_db("plataforma",$link))  
   {  
      echo "Error seleccionando la base de datos.";  
      exit();  
   }  
   return $link;  
}  


/* 

http://www.ideaschile.cl/visualizar-datos-php-mysql.php

$mysqli= new mysqli("localhost", "root", "12345678", "inscripciones");

if(mysqli_connect_errno()){
  
  echo "Error de conexion", mysqli_connect_error();
  exit();
}
*/

?>


