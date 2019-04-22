<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=0.5">
	<title>juego 2 </title>
	 <link rel="stylesheet" type="text/css" href="/plataforma/css/juegobotones.css">

</head>
<body>

<div class="bordepre">Seleccione la respuesta correcta de las siguientes operaciones matemáticos</div>
	<form action="juego2.php?pregunta=<?php echo $_GET['pregunta']; ?>" method="POST" class="alinear">
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
	
		<input type='text' value='3 + 2' readonly class='centrar'>
		<input type='hidden' name='numero' value='5'>
	<br>
		<div class='inputGroup'>
			<input type='radio' id='radio1' name='radio' value='2'><label for='radio1'>Dos</label>
			</div>
			<div class='inputGroup'>
			 <input type='radio' id='radio2' name='radio' value='5'><label for='radio2'>Cinco</label> 
			</div>
			<div class='inputGroup'>
			 <input type='radio' id='radio3' name='radio' value='8'><label for='radio3'>Ocho</label>
			</div>
<br>
";
				break;
			case 2:
				echo "
		<input type='text' value='4 + 2' readonly class='centrar'>
		<input type='hidden' name='numero' value='6'>
	<br>
		<div class='inputGroup'>
			<input type='radio' id='radio1' name='radio' value='6'><label for='radio1'>Seis</label>
			</div>
			<div class='inputGroup'>
			 <input type='radio' id='radio2' name='radio' value='5'><label for='radio2'>Cinco</label> 
			</div>
			<div class='inputGroup'>
			 <input type='radio' id='radio3' name='radio' value='8'><label for='radio3'>Ocho</label>
			</div>
<br>
";
				break;
				case 3:
				echo "
		<input type='text' value='3 + 7' readonly class='centrar'>
		<input type='hidden' name='numero' value='10'>
	<br>
		<div class='inputGroup'>
			<input type='radio' id='radio1' name='radio' value='6'><label for='radio1'>Seis</label>
			</div>
			<div class='inputGroup'>
			 <input type='radio' id='radio2' name='radio' value='5'><label for='radio2'>Cinco</label> 
			</div>
			<div class='inputGroup'>
			 <input type='radio' id='radio3' name='radio' value='10'><label for='radio3'>Diez</label>
			</div>
		";
				break;

		}

	}

	if (isset($_POST["bolean"])) {
		

	$num1= $_POST['numero'];
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

	
	?>
</div>
	<?php
	function siguiente($n){
		return ($n<3)?$n+1:$n;
	}
	function anterior($n){
		return ($n>1)?$n-1:1;
	}
	?>
	<input type="hidden" name="bolean" value=1>
	<input class="boton" type="submit" name="verificar" value="Comprobar">
	</form>

	<form action="juego2.php?pregunta=<?php echo anterior($pregunta);?>" method="POST" class="alinear">
		<input type="submit" class="boton" value="Anterior">
	</form>

	<form action="juego2.php?pregunta=<?php echo siguiente($pregunta);?>" method="POST" class="alinear">
		<input type="submit" class="boton" value="Siguiente">
	</form>

</div>
</body>
</html>