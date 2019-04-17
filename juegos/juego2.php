<!DOCTYPE html>
<html>
<head>
	<title>juego 2 </title>
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
		width: 15%;
		height: 40px;
		font-size: 20px;
  		font-family: Arial;
  		text-align: center;
		border-radius: 6px;
		border-color: orange;
		background: transparent;
	}

	input[type='text']{
		border-color: orange;
		font-size: 30px;
		text-align: center;
		background: transparent;
	}

</style>

<center>
<h3>Seleccione la cantidad en letras del siguiente numero</h3></center>
<form action="juego2.php" method="POST">
<?php

echo "
<div align='center'>
<input type='text' name='numero' id='num' value='5' readonly></input>
<br><br><br>
<select name='seleccionar'>
<option>Elegir</option>
<option value='1'>uno</option>
<option value='5'>cinco</option>
<option value='3'>tres</option>
</select>
<br>
";


if (isset($_POST["bolean"])) {
	

$num1= $_POST['numero'];
$num2= $_POST['seleccionar'];
        
	echo '<br>';
		
        if($num1==$num2) {
        	
            echo "<script>
        			window.alert('CORRECTO')
	        	  </script>";
            
        }else{
        	
            echo "<script>
        			window.alert('INCORRECTO')
        		  </script>";
        }
}
?>
<input type="hidden" name="bolean" value=1>
<input class="botones1" type="submit" name="verificar" value="Comprobar"></input>
</form>
</div>
</body>
</html>