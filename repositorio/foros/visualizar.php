<html>
<head>
  <meta charset="utf-8">
	<title>Foros</title>
	<link rel="stylesheet" type="text/css" href="../css/foro.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	
</head>
<body>

<div class="row">
  <div id="admin" class="col s12">
    <div class="card material-table">
      <div class="table-header">
        <span class="table-title">Foro del Curso --> <?php echo $_GET['curso']; ?></span>
        <div class="actions">
          <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
        </div>
      </div>
      <table id="datatable">
        <thead>
          <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Enlace</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include_once '../conexion/conectar.php';
          $sql = "SELECT titulo,idautor,idforo FROM foros WHERE idcurso=".$_GET['idcurso'];
          $r = mysqli_query($mysql,$sql);

          while($fila = $r->fetch_array()){
            $sql = "SELECT concat(`nombre`,' ',`apellido`) FROM usuarios WHERE idautor = ".$fila[1];
            $autor = mysqli_query($mysql,$sql)->fetch_array()[0];
            echo "
              <tr>
                <td>".$fila[0]."</td>
                <td>".$autor."</td>            
                <td>
                  <strong>
                  <u><a href='contenido.php?id=".$fila[2]."' target='_blank'>Link Foro</a></u>
                  </strong>
                </td>
              </tr> 
            ";
          }
          ?>         
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="../js/jquery.js"></script>
<script src="../js/datos.js"></script>

<script src="../js/tabla.js"></script>

</body>
</html>