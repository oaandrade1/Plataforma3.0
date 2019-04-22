<?php

if (isset($_POST['submit'])) {   
    if(is_uploaded_file($_FILES['fichero']['tmp_name'])) {
     
        // creamos las variables para subir a la db
        $ruta = "archivos/"; 
        $nombre_archivo = trim ($_FILES['fichero']['name']); //Eliminamos los espacios en blanco
        $nombre_archivo = str_replace(" ", "-",$nombre_archivo);//Sustituye una expresión regular
        
        $upload = $ruta . $nombre_archivo;  

        /*
        # FORMATO
          area_autor_curso_nombrearchivo.mp3
          1_2_4_alejandro
        */

        if(move_uploaded_file($_FILES['fichero']['tmp_name'],$ruta)) { //movemos el editor a su ubicacion 
          /*
          echo "<b>Upload exitoso!. Datos:</b><br>";  
          echo "Nombre: <i><a href=\"".$editor . $nombre_archivo."\">".$_FILES['fichero']['name']."</a></i><br>";  
          echo "Tipo MIME: <i>".$_FILES['fichero']['type']."</i><br>";  
          echo "Peso: <i>".$_FILES['fichero']['size']." bytes</i><br>";  
          echo "<br><hr><br>";  
          */
           $nombre  = $_POST["titulo"]; 
           $descripcion  = $_POST["descripcion"];

        }
    }  
 } 
?> 

<body> 
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">  
    Seleccione archivo: <input name="fichero" type="file" size="150" maxlength="150">  
    <br><br> Nombre: <input name="titulo" type="text" size="70" maxlength="70"> 
    <br><br> Descripcion: <input name="descripcion" type="text" size="100" maxlength="250"> 
    <br><br> 
  <input name="submit" type="submit" value="SUBIR ARCHIVO">   
</form>  
</body>