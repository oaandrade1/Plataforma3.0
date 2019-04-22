<?php


?>

<html>
<head>
	<meta charset="utf-8">
	<title>Cuestionario</title>
	<link rel="stylesheet" type="text/css" href="../css/vistacuestionario.css">
</head>
<html class="" lang="en">
<body>

  <div class="container">
    <div class="grupo-form">
      <label for="nombre">Nombre:</label>
      <input name="nombre" id="nombre" placeholder="Nombre" maxlength="50" required="">
    </div>      
    <div class="grupo-form">
      <label for="apellido">Apellido:</label>
      <input name="apellido" id="apellido" placeholder="Apellido" maxlength="50" required="">
    </div>
  </div>

  <!-- ******************** PREGUNTAS DEL CUESTIONARIO ******************** -->

  <?php

    include_once '../conexion/conectar.php';

    $sql = "SELECT tc.idtest,tc.titulo,t.numpregunta,t.pregunta FROM test_curso as tc INNER JOIN test as t ON tc.idtest='".$_GET['test']."' AND tc.idtest=t.idtest";

    //echo "<br>";
    //echo "SQL: ".$sql;
    //echo "<br>";

    $r = mysqli_query($mysql,$sql);

    $npregunta = 0;

    while($fila = $r->fetch_array()){
      echo '
        <div class="test">
          <h2 class="test-question">'.$fila["numpregunta"].': '.$fila["pregunta"].'</h2>
            <ul data-test-question="1" id="seccion_pregunta'.$fila["numpregunta"].'">
      ';

      //$sql = "SELECT tos.idtest,tos.numpregunta,tos.numopcion,tos.opcion_pregunta FROM test_curso as tc INNER JOIN test as t INNER JOIN test_opciones as tos ON tc.idtest='".$_GET['test']."' AND tc.idtest=t.idtest=tos.idtest AND t.numpregunta=tos.numpregunta AND tos.numpregunta='".$fila["numpregunta"]."'";
      $sql = "SELECT tos.idtest,tos.numpregunta,tos.numopcion,tos.opcion_pregunta FROM test_curso as tc INNER JOIN test as t ON tc.idtest='".$_GET['test']."' AND tc.idtest=t.idtest INNER JOIN test_opciones as tos ON tos.idtest='".$_GET['test']."' AND t.numpregunta=tos.numpregunta AND tos.numpregunta='".$fila["numpregunta"]."'";

      /*echo "<br>";
      echo "SQL: ".$sql;
      echo "<br>";*/

      $rop = mysqli_query($mysql,$sql);

      $nopcion = 0;

      while($opcion = $rop -> fetch_array()){
        echo '            
          <li class="test-answer" id data-test-answer="a">'.$opcion["opcion_pregunta"].'</li>
        ';
        $nopcion++;
      }
      echo '
          </ul>
        </div>
      ';
      $npregunta++;
    }
  ?>

  <!-- ****************************************************************** -->

  <!-- ******************** ALGORITMO CUESTIONARIO ******************** -->
  <script>
    function cargarDatos(seccion_pregunta,seccion_respuesta){
    	var opciones = document.getElementById(seccion_pregunta);
      var respuestas = document.getElementById(seccion_respuesta);
    	var lista = opciones.getElementsByTagName("li");
      var datos = respuestas.getElementsByTagName("input");
    	console.log(lista.length);
      console.log(datos.length);
      console.log("********************");

      for (var p = lista.length - 1; p >= 0; p--) {
        //console.log("DATOS: "+datos[i].value);
        var fondo_tmp = lista[p].style;
        var dato_tmp = datos[p];
        if(dato_tmp.value=="1"){
            fondo_tmp.background = "orange";
            dato_tmp.value = "1";
            //console.log("Fondo: "+fondo.background);
          }          
      }

      console.log("********************");
    	//lista[0].style.background="orange";
    	//console.log(lista[0].style.backgroundColor);
    	var pos = [];
      pos.length = lista.length;
      console.log("Lista: "+pos.length);
      for (var i = lista.length-1; i >= 0; i--) {
        console.log("I: "+i);
        let k = i;
        //pos[k] = 1;
        lista[k].onclick = function() {
          console.log("********************");
          console.log("E: "+k);
          
          //if(pos[k]%2!=0){
          var fondo = lista[k].style;
          //fondo.background = "orange";
          if(fondo.background==""){
            fondo.background = "orange";
            datos[k].value = "1";
            //console.log("Fondo: "+fondo.background);
          }        
          //}else{
          //  lista[k].style.background = "#f7f7f7";
          //}
          marcar(lista,k,datos);
          //pos[k]++;
          console.log("********************");
        }
      }
    }

  	function marcar(elementos,posicion,datos){

      for (var l = elementos.length - 1; l >= 0; l--) {
        var respuesta = datos[l];
        if(posicion!=l){
          //console.log("Color: "+elementos[l].style.background);
          var fondo = elementos[l].style;
          
          if(fondo.background!=""){
            fondo.background = "";
            respuesta.value = "0";
            console.log(">> Enviando..");
          }
        }
        console.log("ID: "+respuesta.id+" R"+l+": "+respuesta.value);
      }

  	}
    function datos(){
      var n = document.getElementById('nombre').value;
      var ap = document.getElementById('apellido').value;
      document.getElementById('nombreusr').value=n;
      document.getElementById('apellidousr').value=ap;
      var d = <?php echo $_GET['test']; ?>;
      console.log("D: "+d);
      console.log("D: "+n.length);
      console.log("D: "+ap.length);
      if(n.length>=3&&ap.length>=3){        
        //windows.location.href = "visualizar.php?test="+d;
        return true;
      }else{
        alert("Nombre y Apellido de 3 caracteres mínimo.");
        return false;
      }
      return false;
    }
  </script>


  <!-- ****************************************************************** -->


  <!-- ******************** RESPUESTAS DE LA PERSONA ******************** -->

  <form action="generar.php" method="POST" onsubmit="return datos()">
    <?php
      $t = 1;
      while ($t<=$npregunta) {
        echo '
          <div id="seccion_respuesta'.$t.'">';
        $n = 1;
        while ($n<=$nopcion) {
          echo '            
          <input class="test-answer" type="hidden" name="'.$t.'#'.$n.'" id="'.$t.'#'.$n.'" value="0">';
          $n++;
        }
        echo '
          </div>
        ';
        echo '
        <script>
          cargarDatos("seccion_pregunta'.$t.'","seccion_respuesta'.$t.'");
        </script>';
        $t++;
      }
    ?>
    <input type="hidden" name="idcurso" id="idcurso" value="<?php echo $_POST['idcurso']; ?>">
    <input type="hidden" name="idtest" id="idtest" value="<?php echo $_GET['test']; ?>">
    <input type="hidden" name="nombreusr" id="nombreusr" value="">
    <input type="hidden" name="apellidousr" id="apellidousr" value="">
    <input type="hidden" name="numpreguntas" value="<?php echo ($t-1); ?>">
    <input type="hidden" name="numopciones" value="<?php echo ($n-1); ?>">
    <input type="submit" name="guardar" value="GUARDAR" class="boton">
  </form>

  <!-- ****************************************************************** -->


</body>
</html>
