<html>
<head>
<meta charset="utf-8">
<title>SISTEMA COMISIÓN TÉCNICA</title>
<link rel="stylesheet" type="text/css" href="/TESIS/css/diseño.css">
<link rel="stylesheet" type="text/css" href="/TESIS/css/estilo.css">
</head>
<body>
<!-- MENU DESPLEGABLE -->

<nav>
			<ul>
			<li><a href="#">Reportes</a>
				<div>
					<ul>
						<!--
						<li><a href="/TESIS/pdf/plantilla.php" target="ventana_iframe">Reporte de equipos</a></li>
						<li><a href="/TESIS/pdf/plantilla1.php">Reporte de jugadores</a></li>
						-->
						<li><a href="/TESIS/pdf/pdfupdate/php/formulario_generarC.php" target="ventana_iframe">Reporte de equipo</a></li>
						<li><a href="/TESIS/pdf/pdfupdate/php/formulario_generar.php" target="ventana_iframe">Reporte de jugador</a></li>
						<li><a href="/TESIS/pdf/pdfupdate/php/formulario_generarJUG.php" target="ventana_iframe">Reporte club-jugadores</a></li>
						<li><a href="/TESIS/pdf/pdfupdate/php/formulario_generarClubes.php" target="ventana_iframe">Reporte de equipo por categoria</a></li>
						<li><a href="/TESIS/buscarActa.php" target="ventana_iframe">Reporte de Acta</a></li>
					</ul>
					</div>
					</li>
					<li>
						<form action="/TESIS/generarPos_Gol.php" method="POST" target="ventana_iframe">
							<input class="btonmenu" type="submit" value="G.posiciones y golea" >
							<input type="hidden" name="nacta" value="500">
						</form>
					</li>
					<li>
						<form action="/TESIS/generarResul_Sanc.php" method="POST" target="ventana_iframe">
							<input class="btonmenu" type="submit" value="G. Resultados y Sanc">
							<input type="hidden" name="nacta" value="500">
						</form>
					</li>
					<li>
						<form action="/TESIS/generarTorneo.php" method="POST" target="ventana_iframe">
							<input class="btonmenu" type="submit" value="Generar torneo">
							<input type="hidden" name="nacta" value="500">
						</form>
					</li>
					

			</ul>
			<img src="/TESIS/imagenes/bannerN.jpg" width="100%"; height="20%">
		</nav>
<div align="right">ROL: Comisión técnica</div>
		<!--BOTON CERRAR SESION-->
<div align="right"><form action="/TESIS/cerrar-sesion.php" method="post"><input class="botones1" type="submit" value="Cerrar Sesión"/></form></div>

<!-- MOSTRAR EN LA MISMA PAGINA src="espaciosecretaria.php" -->
<center><iframe  marginwidth="0" marginheight="0" name="ventana_iframe" scrolling="no" border="0"  frameborder="0" width="100%" height="100%"> 
</iframe></center>
<br><br><br></div>



<!-- PIE DE PAGINA-->
<div position:fixed;  style="border-radius: 4px; height: 40px; background-color: #E8BB1F"></div>
<center><div class="pie" style="display:inline";  style="border-radius: 4px; height: 20px; background-color: #169CA2">© 2017. </div></center>
 <div class="Dome" style="border-radius: 4px; height: 20px; background-color: #169CA2"></div>



</body>

</html>
