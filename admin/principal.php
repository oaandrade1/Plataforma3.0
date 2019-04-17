<?php
  session_start();

  error_reporting(0);
  $varsesion = $_SESSION['Administrador'];
  

  if($varsesion == null || $varsesion = ''){
  echo 'sin autorizacion';
    die();
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="shortcut icon" href="imagenes/iconoweb.ico" />
	<title>Administrador</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="/plataforma/css/menu1.css">
   <link rel="stylesheet" href="/plataforma/css/letra.css">
   <link rel="stylesheet" href="/plataforma/css/btnsesion.css">
  <!--
  <script src="http://code.jquery.com/jquery-latest.js"></script>

  <script src="/plataforma/js/main.js"></script>
-->
</head>

<body>
  <br>
      <div align="center">
      <h2>Sitio de Administrador</h2>
   </div>
   <br>
 
   <center>
       <header>
    <nav>
      <ul>
               
        <li>
          <a href="buscar.html"  target="ventana_iframe"><span "></span>Eliminar o modificar Recursos<span class=""></span></a>
        </li>

        <li >
          <a href="agregar.php" target="ventana_iframe"><span class ></span>Agregar nuevo Recurso<span></span></a>
        </li>
          <!--
         <li>
          <a href="editar.php" target="ventana_iframe"></span>Editar recurso<span></span></a>
        </li>
      -->
        <li>
          <!--BOTON CERRAR SESION-->
<div align="right"><form action="cerrar-sesion.php" method="post"><input class="cerrarsesion" type="submit" value="Cerrar Sesión"/></form></div>
        </li>
       </ul>

    </nav>
  </header>
  </center>


 <!-- MOSTRAR EN LA MISMA PAGINA src="espaciosecretaria.php" -->
<center><iframe  marginwidth="0" marginheight="0" name="ventana_iframe" scrolling="no" border="2"  frameborder="0" width="100%" height="800"> 
</iframe></center>

</body>
</html>