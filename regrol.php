
<?php
include_once 'conexion.php';
if(isset($_POST["rol"]) && !empty($_POST["rol"]))
{

$sql="INSERT INTO roles (rol) 
  VALUES ('$_POST[rol]')";
$result=mysqli_query($conectar,$sql);

print "Datos ingresados exitosamente</br>";
print "rol:".$_POST['rol']."</br>";


}else{
  
  echo $_POST["rol"];
  print "verifica que todos los campos esten llenos"; 
}
//sleep(5);
//header('Location: login1.php');  
?>
