<?php

  session_start();
  if(!isset($_SESSION['identidadUSR'])){
    echo "No tiene permiso.";
    die();
  }

?>

<html>
<head>
  <title>Editar Curso</title>
  <link rel="stylesheet" type="text/css" href="../../css/formulario.css">
</head>
<body class="cuerpo">
  <br>
  <?php
    //echo "ID Curso: ".$_GET['id'];
    include_once '../../conexion/conectar.php';
    $idcursoeditar = $_GET['id'];
    //$idcursoarea = $_POST['idarea'];
    $sql = "SELECT titulo,descripcion,contenido FROM cursos WHERE idcurso=".$idcursoeditar;
    $fila = mysqli_query($mysql,$sql)->fetch_array();
  ?>

  <div class="container">
      <h1>Editar Curso</h1>
      <p>Ingrese detalles del curso.</p>
    <form method="POST" action="actualizar.php">
      <div class="grupo-form">
        <label for="tema">Titulo:</label>
        <input name="tema" id="tema" placeholder="Tema del curso" value="<?php echo $fila[0];?>">
      </div>      
      <div class="grupo-form">
        <label for="detalle">Descripción:</label>
        <input name="detalle" id="detalle" placeholder="Detalles del curso" value="<?php echo $fila[1];?>">
      </div>    

      <?php

        //$contenido = str_replace("'","''",$fila[2]);
        $contenido = htmlentities($fila[2], ENT_QUOTES | ENT_HTML401);

        $directorio = "../..";
        $opcion = 2;

        include_once '../../editor/invocar.php';
        
        $_SESSION["cursodc39"] = "POD7868F4G51TE7";

      ?>
      <input type="hidden" name="curso_contenido" id="curso_contenido" value='<?php echo $contenido;?>'>
      <input type="hidden" name="idcurso" value='<?php echo $idcursoeditar;?>'>
      <!--
      <input type="hidden" name="curso_contenido" id="curso_contenido" value='<?php echo $contenido;?>'>
      -->


    </form>
  </div>
  
</body>
</html>