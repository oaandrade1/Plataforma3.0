<html>
<head>
<meta charset="utf-8">
<title>Subir imagenes</title>
<link rel="stylesheet" href="/plataforma/css/letra.css">
<link rel="stylesheet" href="/plataforma/css/botones.css">
<link rel="stylesheet" type="text/css" href="/plataforma/css/cajatext111.css">
<link rel="stylesheet" href="/plataforma/css/tablaresponsive.css">
</head>
<body>
<h2><center>SUBIR IMAGENES</center><br></h2>


<center>
<form action="UPimagenes.php" autocomplete="off" method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>" enctype="multipart/form-data">
<table  width="50%" height="30%" border="0" class="1">
 
  <tr>
       <td align="right">Titulo</td>
       <td><input type="text" name="titulo"></input></td>
  
       <td>Descripcion</td>
      <td><input type="text" name="descripcion"></input></td>
  </tr>
    <tr>
       
      <td>Subir archivo</td>
      <td><input type="file" name="archivo" ></td>
  </tr>
<tr>
  <td colspan="4" align="center"><input type="submit" value="Guardar" class="botones1"></td>
</tr>
  </table>
          
  </tr>
  </center>
</table>
</form><br><br><br><br><br><br><br><br><br><br>
</center>
</div>


<?php 
  //$conn2 = mysqli_connect("127.0.0.1","root", "", "info_pwe");

# Conectamos con MySQL
$mysqli=new mysqli("127.0.0.1","root","","info_pwe");
if (mysqli_connect_errno()) {
    die("Error al conectar: ".mysqli_connect_error());
}
# Comprobamos que se haya subido un fichero
if (is_uploaded_file($_FILES["archivo"]["tmp_name"]))
{
    # verificamos el formato de la imagen
    if ($_FILES["archivo"]["type"]=="image/jpeg" || $_FILES["archivo"]["type"]=="image/pjpeg" || $_FILES["archivo"]["type"]=="image/gif" || $_FILES["archivo"]["type"]=="image/bmp" || $_FILES["archivo"]["type"]=="image/png")
    {
        # Cogemos la anchura y altura de la imagen
        $info=getimagesize($_FILES["archivo"]["tmp_name"]);

        # Escapa caracteres especiales
        $imagenEscapes=$mysqli->real_escape_string(file_get_contents($_FILES["archivo"]["tmp_name"]));
 
        # Agregamos la imagen a la base de datos
        $sql="INSERT INTO `imagenes` (id_imagen, tipo, archivo, titulo, descripcion) VALUES ( '', '".$_FILES["archivo"]["type"]."','".$imagenEscapes."', '$_POST[titulo]', '$_POST[descripcion]')";
        $mysqli->query($sql);
              
 
        # Cogemos el identificador con que se ha guardado
        $id=$mysqli->id_imagen;
 
       
         ?>
        <script>
    alert("IMAGEN GUARDADA EXITOSAMENTE");
</script>
  <?php
        //echo "<div class='mensaje'>Imagen agregada con el id ".$id."</div>";
    }else{
        echo "<div class='error'>Error: El formato de archivo tiene que ser JPG, GIF, BMP o PNG.</div>";
    }
}
?>

</body>
</html>



