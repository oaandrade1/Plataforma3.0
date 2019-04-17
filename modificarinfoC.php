<title>MODIFICAR INFORMACION CONTENIDO</title>
<link rel="stylesheet" type="text/css" href="css/formulario.css">

<?php
include_once 'conexion.php';
    //CAPTURAR TITULO DE CONTENIDO 
    $sql = "SELECT titulo FROM archivos";
    $result = mysqli_query($conectar,$sql);
    echo "<datalist id='lista'>";
    while($fila=mysqli_fetch_array($result)){
        $nombreG = $fila[0]." ".$fila[1];
        echo "  
            <option value='$nombreG'></option>";
    }
    echo "</datalist>";
?>
<!-- BUSCAR REGISTRO -->
<div class="wrapper">
<div align="center" class="login">
<form action="modificarinfoC.php" method="post" autocomplete="off">
  <div class='login-container'>
NOMBRE DEL CONTENIDO <input type="text" name="titulo" list="lista" required>
<input type="submit" name="buscar" value="Buscar" class="boton">
</form>

<!-- CONEXION PARA BUSCAR REGISTRO EN LA BDD -->

 <?php 
 if(isset($_REQUEST['buscar'])){
$titulo=$_REQUEST['titulo'];

                    $conexion = mysqli_connect("127.0.0.1","root","","plataforma");
                    $result = mysqli_query($conexion,"select * from archivos where titulo='$titulo'"); 
               if($row=mysqli_fetch_array($result))
         {




echo "<br>";

echo "

<form action='modificarinfoC.php' method='post' class='login'>


    <!-- Contenedor del Formulario -->
      <img src='/plataforma/imagen_mostrar.php?idarchivo=$row[idarchivo]' width='200px' height='200px'></th>    
<br><br>
<label>Titulo</label>
<input type='text' name='titulo' value='$row[titulo]'></td></tr>

<label>Descripcion</label>
<td><input type='text' name='descripcion' value='$row[descripcion]'></td></tr>

<label>Etiquetas</label>
<td><input type='text' name='etiquetas' value='$row[etiquetas]'></td></tr>

<br>
<input type='hidden' name='idarchivo' value='$row[idarchivo]'>

<tr>
<td colspan=2 align='center'><input type='submit' name='Modificar' value='Modificar' class='boton'></td></div>
</form>";

}
else{
echo "<div align='center'>No se encuentran registros con ese numero de id</div><br>"; 
}
}
?>

<?php
//ACTUALIZAR DATOS

if(isset($_REQUEST['Modificar'])){
$titulo=$_REQUEST['titulo'];
$descripcion=$_REQUEST['descripcion'];
$etiquetas=$_REQUEST['etiquetas'];
$idarchivo=$_REQUEST['idarchivo'];

//CONSULTA SQL
$queryi="UPDATE archivos SET 
titulo='$titulo',
descripcion='$descripcion',
etiquetas='$etiquetas',
idarchivo=$idarchivo
WHERE idarchivo=$idarchivo";
//echo "consulta: ".$queryi;
$val=mysqli_query($conectar,$queryi);//ejecutando consulta

if(!$val){
echo "No se ha podido Modificar";
}
else {
echo "Datos Modificados Correctamente<br><br>";
}
}
?>
</div>


<script type="text/javascript">
document.oncontextmenu = function(){return false;}
</script>


  <script>
      if ( window.history.replaceState ) {
          window.history.replaceState( null, null, window.location.href );
      }
  </script>