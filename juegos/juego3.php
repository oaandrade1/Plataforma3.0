<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=0.5">
	<title>juego 3 </title>
	 <link rel="stylesheet" type="text/css" href="/plataforma/css/juegobotones.css">
</head>
<body>
<div class="bordepre">
Seleccione la cantidad que corresponda según la imagen</div>
<form action="juego3.php?pregunta=<?php echo $_GET['pregunta']; ?>" method="POST" class="alinear">
	<br>
	<div class="borderesp">
	<?php
if($_GET['pregunta']){
		$pregunta = $_GET['pregunta'];
		//echo "Pregunta: ".$pregunta;
		//die();
		switch ($pregunta) {
			case 1:
				echo "

		<input type='hidden' name='imagen1' id='num' value='3'>
		<img src='/plataforma/imagenes/globos.png' height='30%' width='30%' alt='globos' title='globos' class='centrar'/>
		<br>
		<div class='inputGroup'>
			<input type='radio' id='radio1' name='radio' value='2'><label for='radio1'>Dos</label>
			</div>
			<div class='inputGroup'>
			 <input type='radio' id='radio2' name='radio' value='4'><label for='radio2'>Cuatro</label> 
			</div>
			<div class='inputGroup'>
			 <input type='radio' id='radio3' name='radio' value='3'><label for='radio3'>Tres</label>
			</div>
<br>
";
break;
			case 2:
				echo "
<input type='hidden' name='imagen1' id='num' value='3'>
		<img src='/plataforma/imagenes/manzana3.png' height='60%' width='60%' alt='manzanas' title='manzanas' class='centrar'/>
		<br>
		<div class='inputGroup'>
			<input type='radio' id='radio1' name='radio' value='3'><label for='radio1'>Tres</label>
			</div>
			<div class='inputGroup'>
			 <input type='radio' id='radio2' name='radio' value='4'><label for='radio2'>Cuatro</label> 
			</div>
			<div class='inputGroup'>
			 <input type='radio' id='radio3' name='radio' value='8'><label for='radio3'>Ocho</label>
			</div>
<br>
";
break;

			case 3:
				echo "
<input type='hidden' name='imagen1' id='num' value='3'>
		<img src='/plataforma/imagenes/limones.png' height='40%' width='40%' alt='limones' title='limones' class='centrar'/>
		<br>
		<div class='inputGroup'>
			<input type='radio' id='radio1' name='radio' value='2'><label for='radio1'>Dos</label>
			</div>
			<div class='inputGroup'>
			 <input type='radio' id='radio2' name='radio' value='3'><label for='radio2'>Tres</label> 
			</div>
			<div class='inputGroup'>
			 <input type='radio' id='radio3' name='radio' value='8'><label for='radio3'>Ocho</label>
			</div>
<br>
";
			break;

			case 4:
				echo "
<input type='hidden' name='imagen1' id='num' value='2'>
		<img src='/plataforma/imagenes/cherries.png' height='30%' width='30%' alt='cerezas' title='cerezas' class='centrar'/>
		<br>
		<div class='inputGroup'>
			<input type='radio' id='radio1' name='radio' value='2'><label for='radio1'>Dos</label>
			</div>
			<div class='inputGroup'>
			 <input type='radio' id='radio2' name='radio' value='4'><label for='radio2'>Cuatro</label> 
			</div>
			<div class='inputGroup'>
			 <input type='radio' id='radio3' name='radio' value='8'><label for='radio3'>Ocho</label>
			</div>
<br>
";
break;
}
}
	if (isset($_POST["bolean"])) {

if (isset($_POST['imagen1'])){
$num1= $_POST['imagen1'];
$num2= $_POST['radio'];
        
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
}?>
</div>
<?php
	function siguiente($n){
		return ($n<5)?$n+1:$n;
	}
	function anterior($n){
		return ($n>1)?$n-1:1;
	}
	?>
	
	<input type="hidden" name="bolean" value=1>
	<input class="boton" type="submit" name="verificar" value="Comprobar">
	</form>

	<form action="juego3.php?pregunta=<?php echo anterior($pregunta);?>" method="POST" class="alinear">
		<input type="submit" class="boton" value="Anterior">
	</form>

	<form action="juego3.php?pregunta=<?php echo siguiente($pregunta);?>" method="POST" class="alinear">
		<input type="submit" class="boton" value="Siguiente">
	</form>


</body>
</html>