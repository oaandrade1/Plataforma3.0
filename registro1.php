<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Registrarse</title>
 	<link rel="shortcut icon" href="imagenes/iconoweb.ico" />
<link rel="stylesheet" type="text/css" href="/plataforma/css/cajatext.css">
<link rel="stylesheet" type="text/css" href="/plataforma/css/login.css">
</head>
<body>
<div class="cont">

  <div class="form">
    <form action="registrarDatos.php" method="post">
      <h1>Registrarse</h1>
      
      <label for="nombre">Nombre<input type="text" id="nombre" title="nombre" class="pass" name="nombre" placeholder="Nombre" /></label>
      <input type="hidden" name="rol" value=2>

       <label for="apellido">Apellido<input type="text" id="apellido" title="apellido" class="pass" name="apellido" placeholder="Apellido" /></label>
       <label for="correo">Correo electronico<input type="email" class="user"  name="correo" placeholder="Correo electronico" /></label>

        <label for="passw">Contraseña<input type="password" id="passw" title="contraseña" class="pass" name="passw" placeholder="Contraseña" /></label>
         <label for="passw1">Confirmar contraseña<input type="password" id="passw1" title="verificar contraseña" class="pass" name="passw1" placeholder="Confirmar contraseña" /></label>

        <input name="enviar" class="login" id="enviar" type="submit" value="Guardar Datos" />
    </form>
  </div>

</div>