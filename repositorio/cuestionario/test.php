<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Cuestionarios</title>
	<link rel="stylesheet" type="text/css" href="../css/cursos.css">
  <link rel="stylesheet" type="text/css" href="../css/buscador.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

  <?php
    include_once '../conexion/conectar.php';
   $sql="SELECT idtest, titulo, idcurso FROM test_curso ";
    
    $r = mysqli_query($mysql,$sql);
    /*$sqlarea = "SELECT area FROM areaconocimiento WHERE idarea=".$idarea;
    $areacurso = mysqli_query($mysql,$sqlarea)->fetch_array()[0];*/
  ?>

  <center>
    <h1>Cuestionarios</h1>
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
        <form method='POST' action='visualizar.php?test=".$fila[0]."' target='_blank'>
        <input type='hidden' name='idcurso' value='".$fila[2]."'>
        <li class='cards__item'>
          <div class='card'>
            <div class='card__image card__image--fence'></div>
            <div class='card__content'>
              <div class='card__title'>".$fila[1]."</div>
                <button class='btn btn--block card__btn'>REALIZAR TEST</button>
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
