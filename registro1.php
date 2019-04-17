<!DOCTYPE html>
<html lang="en">
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
      
      <label>Nombre<input type="text" class="pass" name="nombre" placeholder="Nombre" /></label>
      <input type="hidden" name="rol" value=2>
       <label>Apellido<input type="text" class="pass" name="apellido" placeholder="Apellido" /></label>
       <label>Correo electronico<input type="email" class="user"  name="correo" placeholder="Correo electronico" /></label>
        <label>Contraseña<input type="password" class="pass" name="passw" placeholder="Contraseña" /></label>
         <label>Confirmar contraseña<input type="password" class="pass" name="passw1" placeholder="Confirmar contraseña" /></label>

        <input name="enviar" class="login" id="enviar" type="submit" value="Guardar Datos" />
    </form>
  </div>

</div>