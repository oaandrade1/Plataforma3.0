<!DOCTYPE html>
<html lang="es">
  <meta charset="utf-8">
  <title>Inicio Sesion</title>
 	<link rel="shortcut icon" href="imagenes/iconoweb.ico" />
<link rel="stylesheet" type="text/css" href="/plataforma/css/cajatext.css">
<link rel="stylesheet" type="text/css" href="/plataforma/css/login.css">
</head>
<body>
<div class="cont">

  <div class="form">
    <form action="admin/verificar.php" method="post">
      <h1>Inicio de sesión</h1>
      <label for="usuario">Correo electronico<input type="email" class="user" id="usuario" title="usuario" name="usuario" placeholder="Correo electronico"></label>
      <label for="codigo">Contraseña<input type="password" id="codigo" class="pass" name="codigo" title="contraseña" placeholder="Contraseña"></label>

      <input  type="submit" class="login" value="Iniciar sesión">
    </form>
  <a href="registro1.php"><input type="button" class="login" name="registro" value="Registrarse"></a>
  </div>

</div>