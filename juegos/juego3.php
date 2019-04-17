<!DOCTYPE html>
<html>
<head>
	<title>juego 3 </title>
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
<h3>Seleccione la cantidad que corresponda según lo que se muestra en la imagen</h3></center>
<form action="juego3.php" method="POST">
    <?php
echo "
<table border='0' align='center'>
	<tr>
		<td width:auto>
		<input type='hidden' name='imagen1' id='num' value='2'>
		<img src='/plataforma/imagenes/leon2.png' title='Leon'/>
		</input>
		</td>
		
    <!--Espacio entre columnas -->
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
   
		<td><select name='tabla1'>
         <option>Elegir</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
        </td>
 </table>
<br>
";


$num1= $_POST['imagen1'];
$num2= $_POST['tabla1'];
        
	echo '<br>';
		
        if($num1==$num2) {
            echo 'CORRECTO';
        }else{
            echo 'INCORRECTO';
        }

?>

<input type="submit" name="verificar" value="Comprobar"></input>
</form>
</div>
</body>
</html>