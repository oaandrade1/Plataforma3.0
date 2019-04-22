<?php
  session_start();
  //echo "Session Global: ".$_SESSION['sesionglobal'];
  if(!isset($_SESSION['identidadUSR'])){
      echo "No tiene permiso.";
      die();    
  }
  if(!isset($_GET['area'])){
    die();
  }else{
    $idarea = $_GET['area'];
  }
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Cursos</title>
	<link rel="stylesheet" type="text/css" href="../../css/cursos.css">
  <link rel="stylesheet" type="text/css" href="../../css/buscador.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>  

  <?php
    include_once '../../conexion/conectar.php';
    $idusuario = $_SESSION['identidadUSR'];
    $sql = "SELECT c.idcurso,c.titulo,c.descripcion,ca.idarea from cursos as c INNER JOIN curso_area ca ON c.idcurso=ca.idcurso AND c.idautor=".$idusuario." AND ca.idarea=".$idarea;
    $idareac = mysqli_query($mysql,$sql)->fetch_array()[3];
    $sqlarea = "SELECT area FROM areaconocimiento WHERE idarea=".$idarea;
    $areacurso = mysqli_query($mysql,$sqlarea)->fetch_array()[0];

    $r = mysqli_query($mysql,$sql);
  ?>

  <center>
    <h1><?php echo $areacurso; ?></h1>
  </center>

  <section>
      <form class="buscador" method="post">
        <input type="text" class="cajatexto" placeholder="Buscar curso">
        <input title="Buscar curso" value="" type="submit" class="button">
      </form>
  </section>

  <section>
    <ul class="cards">   
    <?php
    while($fila=$r->fetch_array()){
      echo "
        <form method='POST' action='../../../agregarREA.php' target='_blank'>          
          <input type='hidden' name='idcurso' value='".$fila[0]."'>
          <input type='hidden' name='area' value='".$_GET['area']."'>
          <li class='cards__item'>
            <div class='card'>
              <div class='card__image card__image--fence'></div>
              <div class='card__content'>
                <div class='card__title'>".$fila[1]."</div>
                <p class='card__text'>".$fila[2]."</p>
                  <button class='btn btn--block card__btn'>SUBIR</button>
              </div>
            </div>
          </li>
        </form>
      ";
      }
      /*
      <button class='btn btn--block card__btn' onclick='verCurso(".$fila[0].")'>VER</button>
      */
     ?>

    </ul>
  </section>

  <script>
    function verCurso(n){
      window.open("seccion.php?curso="+n,"_blank");
    }
  </script>

</body>
</html>
