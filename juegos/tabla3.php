<!DOCTYPE html>
<html>
<head>
  <title>Juego tablas de multiplicar</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=2">
    <!--<link rel="stylesheet" type="text/css" href="/plataforma/css/estiloCajas.css">-->
    <link rel="stylesheet" type="text/css" href="/plataforma/css/botones.css">
    <link rel="stylesheet" type="text/css" href="/plataforma/css/letra.css">
     <link rel="stylesheet" type="text/css" href="/plataforma/css/tablasmul.css">
</head>
<body>
<center>
<h4>Tabla del 3</h4>
</center>

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
<!-------------------------------------------------------------------------------->

<!--------------------------------------------------------------------------------------->
<form action="tabla3.php" method="POST">
<table border='0' align='center'>
  <tr>
    <td width:auto>
    3 x 0 =
    </td>
    <td>
      <select name="t0" <?php echo calificar($temp[0],0);?>>
        <option value="3" <?php if($temp[0]=='3'){ echo 'selected="selected"';}?> >3</option>
        <option value="0" <?php if($temp[0]=='0'){ echo 'selected="selected"';}?> >0</option>
        <option value="5" <?php if($temp[0]=='5'){ echo 'selected="selected"';}?> >5</option>
      </select>
    </td>
    <!--Espacio entre columnas -->
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td width:auto>
    3 x 1 =
    </td>
    <td>
      <select name="t1" <?php echo calificar($temp[1],3);?>>
        <option value="3" <?php if($temp[3]=='3'){ echo 'selected="selected"';}?> >3</option>
        <option value="4" <?php if($temp[3]=='4'){ echo 'selected="selected"';}?> >4</option>
        <option value="3" <?php if($temp[3]=='3'){ echo 'selected="selected"';}?> >3</option>
      </select>
    </td>
    <!--Espacio entre columnas -->
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td width:auto>3 x 2 =</td>
    <td>
      <select name="t2" <?php echo calificar($temp[2],6);?>>
        <option value="5" <?php if($temp[2]=='5'){ echo 'selected="selected"';}?> >5</option>
        <option value="6" <?php if($temp[2]=='6'){ echo 'selected="selected"';}?> >6</option>
        <option value="4" <?php if($temp[2]=='4'){ echo 'selected="selected"';}?> >4</option>
      </select>
    </td>
  </tr>
  <!--Espacio entre filas -->
  <tr>
    <td><br></td>
  </tr>

  <tr>
    <td width:auto>3 x 3 =</td>
    <td>
      <select name="t3" <?php echo calificar($temp[3],9);?>>
        <option value="3" <?php if($temp[3]=='3'){ echo 'selected="selected"';}?> >3</option>
        <option value="6" <?php if($temp[3]=='6'){ echo 'selected="selected"';}?> >6</option>
        <option value="9" <?php if($temp[3]=='9'){ echo 'selected="selected"';}?> >9</option>
      </select>
    </td>
     <!--Espacio entre columnas -->
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td width:auto>3 x 4 =</td>
    <td>
      <select name="t4" <?php echo calificar($temp[4],12);?>>
        <option value="12" <?php if($temp[4]=='12'){ echo 'selected="selected"';}?> >12</option>
        <option value="4" <?php if($temp[4]=='4'){ echo 'selected="selected"';}?> >4</option>
        <option value="8" <?php if($temp[4]=='8'){ echo 'selected="selected"';}?> >8</option>
      </select>
    </td>
    <!--Espacio entre columnas -->
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

    <td width:auto>3 x 5 =</td>
    <td>
      <select name="t5" <?php echo calificar($temp[5],15);?>>
        <option value="10" <?php if($temp[5]=='10'){ echo 'selected="selected"';}?> >10</option>
        <option value="3" <?php if($temp[5]=='3'){ echo 'selected="selected"';}?> >3</option>
        <option value="15" <?php if($temp[5]=='15'){ echo 'selected="selected"';}?> >15</option>
      </select>
    </td>
  </tr>

  <!--Espacio entre filas -->
  <tr>
    <td><br></td>
  </tr>

  <tr>
    <td width:auto>3 x 6 =</td>
    <td>
      <select name="t6" <?php echo calificar($temp[6],18);?>>
        <option value="9" <?php if($temp[6]=='9'){ echo 'selected="selected"';}?> >9</option>
        <option value="18" <?php if($temp[6]=='18'){ echo 'selected="selected"';}?> >18</option>
        <option value="13" <?php if($temp[6]=='13'){ echo 'selected="selected"';}?> >13</option>
      </select>
    </td>
     <!--Espacio entre columnas -->
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td width:auto>3 x 7 =</td>
    <td>
      <select name="t7" <?php echo calificar($temp[7],21);?>>
        <option value="9" <?php if($temp[7]=='9'){ echo 'selected="selected"';}?> >9</option>
        <option value="14" <?php if($temp[7]=='14'){ echo 'selected="selected"';}?> >14</option>
        <option value="21" <?php if($temp[7]=='21'){ echo 'selected="selected"';}?> >21</option>
      </select>
    </td>
    <!--Espacio entre columnas -->
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

    <td width:auto>3 x 8 =</td>
   <td>
      <select name="t8" <?php echo calificar($temp[8],24);?>>
        <option value="16" <?php if($temp[8]=='16'){ echo 'selected="selected"';}?> >16</option>
        <option value="8" <?php if($temp[8]=='8'){ echo 'selected="selected"';}?> >8</option>
        <option value="24" <?php if($temp[8]=='24'){ echo 'selected="selected"';}?> >24</option>
      </select>
    </td>
  </tr>
    <!--Espacio entre columnas -->
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<br>
<tr>
    <td width:auto>3 x 9 =</td>
   <td>
      <select name="t9" <?php echo calificar($temp[9],27);?>>
        <option value="27" <?php if($temp[9]=='27'){ echo 'selected="selected"';}?> >27</option>
        <option value="18" <?php if($temp[9]=='18'){ echo 'selected="selected"';}?> >18</option>
        <option value="5" <?php if($temp[9]=='5'){ echo 'selected="selected"';}?> >5</option>
      </select>
    </td>
    <!--Espacio entre columnas -->
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

    <td width:auto>3 x 10 =</td>
   <td>
      <select name="t10" <?php echo calificar($temp[10],30);?>>
        <option value="5" <?php if($temp[10]=='5'){ echo 'selected="selected"';}?> >5</option>
        <option value="30" <?php if($temp[10]=='30'){ echo 'selected="selected"';}?> >30</option>
        <option value="9" <?php if($temp[10]=='9'){ echo 'selected="selected"';}?> >9</option>
      </select>
    </td>
  </tr>
</table>
<br><br>
<div align="center">
<input type="hidden" name="bolean" value=1>
<input class="botones1" type='submit' name='verificar' value='Verificar'></div>
</form>
</body>
</html>