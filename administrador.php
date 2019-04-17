<?php

  session_start();
  if(!isset($_SESSION['identidadUSR'])){
    echo "No tiene permiso.";
    die();
  }

?>

<html lang="es" dir="ltr">

<head>

  <meta charset="utf-8">
  <title>Administrador</title>

  	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />

 	 <link rel="stylesheet" href="css/administrador.css">

	  <!--
	<link rel="stylesheet" href="admin/B/css/css.css">
  
    <link rel="stylesheet" href="css/letra.css">
    <link rel="stylesheet" href="css/botones.css">
-->
</head>

<body>
  <div class="todo">
    <nav>
      <div class="logo1">
        <div><img src="https://img.icons8.com/color/96/000000/admin-settings-male.png" alt="logo">Administrador</div>
      </div>
      <ul>
        
        <li class="desplegar">Usuarios
        	<i class="fas fa-chevron-right flecha"></i>
        </li>
        <ul class="subboton">
          <li onclick="contenido(1)">Crear usuario</li>
          <li onclick="contenido(4)">Modificar usuario</li>
          <li onclick="contenido(6)">Eliminar usuario</li>
        </ul>
        <li class="desplegar">Roles
          <i class="fas fa-chevron-right flecha"></i>
        </li>
        <ul class="subboton">
          <li onclick="contenido(8)">Crear rol</li>
          <li onclick="contenido(9)">Modificar rol</li>
          <li onclick="contenido(10)">Eliminar rol</li>
        </ul>
        <li class="desplegar">Recursos educativos<i class="fas fa-chevron-right flecha"></i></li>
        <ul class="subboton">
          <li onclick="contenido(3)">Agregar contenido</li>
           <li onclick="contenido(5)">Modificar info de contenido </li>
          <li onclick="contenido(7)">Eliminar contenido</li>
        </ul>
        
      </ul>
    </nav>

    <main class="panelD">

      <header>
         <!--BOTON CERRAR SESION-->
<div align="right"><form action="admin/cerrar-sesion.php" method="post"><input class="boton" type="submit" value="Cerrar Sesión"/></form></div>
      </header>
      <div id="contenedor"></div>
    </main>
  </div>
</body>
</html>

<script>
	function contenido(num){
		$(function (){
			var panel = "";
			switch(num){
				case 1:
					panel = "registro1.php";
				break;
				case 2:
					panel = "login1.php";
				break;
				case 3:
					panel = "agregarREA.php";
				break;
				case 4:
					panel = "modificarinfoU.php";
				break;
				case 5:
					panel = "modificarinfoC.php";
				break;
        case 6:
          panel = "eliminarU.php";
        break;
        case 7:
          panel = "eliminarC.php";
        break;
        case 8:
          panel = "crearRol.php";
        break;
        case 9:
          panel = "modificarRol.php";
        break;
        case 10:
          panel = "eliminarRol.php";
        break;
			}
			$("#contenedor").load(panel);
		});

	}
</script>

<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script src="admin/B/Script/Script.js"></script>



