<!DOCTYPE html>
<html>
<head>
	<title>Practica de multiplicación</title>
	 <link rel="stylesheet" type="text/css" href="/plataforma/css/botones.css">
    <link rel="stylesheet" type="text/css" href="/plataforma/css/letra.css">
    <link rel="stylesheet" type="text/css" href="/plataforma/css/ejerpractica.css">
</head>
<body>
  <!--Boton para ir al inicio -->
  <form action="/plataforma/index.html">
    <input type="submit" class="botones1" name="atras" value="Ir al inicio">
    </input>
  </form>

<!-------------------------------- ALGORITMOS PHP -------------------------------->
<?php 
  $temp = array(0,0,0,0,0,0,0,0,0,0,0);
  $dato = array(0,0,0,0,0,0,0,0,0,0,0);
  $t = array("t0","t1","t2","t3","t4","t5","t6","t7","t8","t9","t10");
  //$s = $t[0];
  //echo $_POST["$t[0]"];
  for ($j=0; $j <= 10; $j++) { 
    if(isset($_POST["$t[$j]"])){
      $temp[$j] = $_POST[$t[$j]];
    }else{
      $temp[$j] = "";
    }
  }

   function calificar($num,$c){
    $b = 0;
    if(isset($_POST["bolean"])){
      $b=1;
    }
    if(($num!=$c)&&($b==1)){
      return "class='incorrecto'"; 
    }
    return "";
  }
?>

<center>
<h3>Vamos a practicar la operación matemática Multiplicación</h3></center>
<form action="/plataforma/practica/multiplicacion.php" method="POST">   		
<table border='0' align="center">
	<tr>
        <td width:auto>
			<img src='/plataforma/imagenes/2x4.png' title='siete - uno' alt="operacion matematica siete menos uno" width="100%" border="0" />
	<select name="t0" <?php echo calificar($temp[0],8);?>>
        <option value="4" <?php if($temp[0]=='4'){ echo 'selected="selected"';}?> >4</option>
        <option value="8" <?php if($temp[0]=='8'){ echo 'selected="selected"';}?> >8</option>
        <option value="2" <?php if($temp[0]=='2'){ echo 'selected="selected"';}?> >2</option>
    </select>
		</td>
	<!--Espacio entre columnas -->
      	<td width:auto>
      		<img src="/plataforma/imagenes/linea.png">
      	</td>

		<td width:auto>
			<img src='/plataforma/imagenes/3x3.png' title='tres + siete' alt="operacion matematica tres mas siete" width="100%" border="0" />
	<select name="t1" <?php echo calificar($temp[1],9);?>>
        <option value="9" <?php if($temp[1]=='9'){ echo 'selected="selected"';}?> >9</option>
        <option value="10" <?php if($temp[1]=='10'){ echo 'selected="selected"';}?> >10</option>
        <option value="3" <?php if($temp[1]=='3'){ echo 'selected="selected"';}?> >3</option>
    </select>
		</td>
		
    <!--Espacio entre columnas -->
     	 <td width:auto>
      		<img src="/plataforma/imagenes/linea.png">
     	 </td>
   
		<td width:auto>
			<img src='/plataforma/imagenes/7x1.png' title='manzana' width="100%" border="0"/>
	
	<select name="t2" <?php echo calificar($temp[2],7);?>>
        <option value="5" <?php if($temp[2]=='5'){ echo 'selected="selected"';}?> >5</option>
        <option value="6" <?php if($temp[2]=='6'){ echo 'selected="selected"';}?> >6</option>
        <option value="7" <?php if($temp[2]=='7'){ echo 'selected="selected"';}?> >7</option>
    </select>
        </td>
   		</tr>
</table>
		<!--SEGUNDA FILA DE OPERACIONES DE SUMA -->
<table border='0' align="center">
	<tr>
        <td width:auto>
			<img src='/plataforma/imagenes/5x3.png' title='manzana' width="100%" border="0" />
	<select name="t3" <?php echo calificar($temp[3],15);?>>
        <option value="6" <?php if($temp[3]=='6'){ echo 'selected="selected"';}?> >6</option>
        <option value="8" <?php if($temp[3]=='8'){ echo 'selected="selected"';}?> >8</option>
        <option value="15" <?php if($temp[3]=='15'){ echo 'selected="selected"';}?> >15</option>
    </select>
		</td>
	<!--Espacio entre columnas -->
      	<td width:auto>
      		<img src="/plataforma/imagenes/linea.png">
      	</td>

		<td width:auto>
			<img src='/plataforma/imagenes/7x2.png' title='manzana' width="100%" border="0" />
	<select name="t4" <?php echo calificar($temp[4],14);?>>
        <option value="3" <?php if($temp[4]=='3'){ echo 'selected="selected"';}?> >3</option>
        <option value="14" <?php if($temp[4]=='14'){ echo 'selected="selected"';}?> >14</option>
        <option value="5" <?php if($temp[4]=='5'){ echo 'selected="selected"';}?> >5</option>
    </select>
		</td>
		
    <!--Espacio entre columnas -->
     	 <td width:auto>
      		<img src="/plataforma/imagenes/linea.png">
     	 </td>
   
		<td width:auto>
			<img src='/plataforma/imagenes/10x2.png' title='manzana' width="100%" border="0"/>
	
	<select name="t5" <?php echo calificar($temp[5],20);?>>
        <option value="20" <?php if($temp[5]=='20'){ echo 'selected="selected"';}?> >20</option>
        <option value="10" <?php if($temp[5]=='10'){ echo 'selected="selected"';}?> >10</option>
        <option value="3" <?php if($temp[5]=='3'){ echo 'selected="selected"';}?> >3</option>
    </select>
        </td>
   		</tr>
</table>

<input type="hidden" name="bolean" value=1>
<center>
<input class="botones1" type="submit" name="verificar" value="Comprobar"></input></center>
</form>
</body>
</html>