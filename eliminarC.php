<title>Eliminar usuario</title>
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
<form action="eliminarC.php" method="post" autocomplete="off">
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

<form action='eliminarC.php' method='post' class='login'>


    <!-- Contenedor del Formulario -->
          
<label>Titulo</label>
<input type='text' name='titulo' value='$row[titulo]' readonly></td></tr>

<label>Descripcion</label>
<td><input type='text' name='nombreC' value='$row[descripcion]' readonly></td></tr>

<label>Autor</label>
<td><input type='text' name='autor' value='$row[idautor]' readonly></td></tr>
<input type='hidden' name='idarchivo' value='$row[idarchivo]' >

<tr>
<td colspan=2 align='center'><input type='submit' name='Eliminar' value='Eliminar' class='boton'></td></div>
</form>";

}
else{
echo "<div align='center'>No se encuentran registros</div><br>"; 
}
}
?>

<?php
//ELIMINAR USUARIO
if(isset($_REQUEST['Eliminar'])){
$titulo=$_REQUEST['titulo'];
$idarchivo=$_REQUEST['idarchivo'];

//consulta sql
$queryi="DELETE FROM archivos
WHERE titulo = '$titulo' AND idarchivo = '$idarchivo'";
$val=mysqli_query($conectar,$queryi);//ejecutando consulta

if(!$val){
    ?>
    <script>alert("No se ha podido Eliminar!")</script>
    <?php 
}
else {
    ?>
    <script>alert("Recurso educativo eliminado.")</script>
<?php 
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