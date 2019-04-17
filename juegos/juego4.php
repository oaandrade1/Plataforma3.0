<!DOCTYPE html>
<html>
<head>
	<title>juego 4 </title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  	<link rel="stylesheet" href="css/responsivemanzana.css">
  	 <link rel="stylesheet" type="text/css" href="/plataforma/css/botones.css">
    <link rel="stylesheet" type="text/css" href="/plataforma/css/letra.css">
</head>
<body>
<style>
		body{
		font-family: Arial;
		font-size: 25px;
		font-weight: bold;
		color: #4286f4;
		}
		select {
		width: 100%;
		height: 40px;
		font-size: 20px;
  		font-family: Arial;
  		text-align: center;
		border-radius: 6px;
		border-color: blue;
	}

	input[type='text']{
		border-color: blue;
		font-size: 30px;
		text-align: center;
	}

</style>

<center>
<h3>Seleccione la imagen donde encuentres 3 manzanas</h3></center>
<form action="juego4.php" method="POST">
 <div  id="manzana">
<table border='0' align="center">
	<tr>
		<td width:auto ><img src='/plataforma/imagenes/manzana1.png' title='manzana' width="100%" border="1" />
		</td>
		
    <!--Espacio entre columnas 
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>-->
   
		<td width:auto ><img src='/plataforma/imagenes/manzana3.png' title='manzana' width="100%" border="1"/>
        </td>
        <!--Espacio entre columnas 
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>-->
   
		<td width:auto ><img src='/plataforma/imagenes/manzana2.png' title='manzana' width="100%" border="1"/>
        </td>
    </tr>
 </table>
 </div>
<br>


<input type="submit" name="verificar" value="Comprobar"></input>
</form>
</div>
</body>
</html>