//IMAGEN DE LOS CAJONES
//imagen.src = "http://localhost/plataforma/imagenes/opcion.png";
var caja = document.getElementById("caja");
var cv, cx, objetos, objetoActual = null;
var inicioX = 0, inicioY =0;
var mover;
var elementos=3;
var px,py;
// Dimension de Contenedor Canvas
var ancho=1300;
var alto=620;
// Dimension de Elementos Canvas
/*
var anchoE=200;
var altoE=60;
*/
var anchoE=150;
var altoE=150;
//Crear Imagenes de los Elementos
var imagen;
function imagenes(imagen){	
	for (var i = 0; i < 2; i++) {
		imagen.push([]);
	}
	var a;
	var t;
	a = [];
	t = [];
	//GENERAR ELEMENTOS ALEATORIOS PARA PREGUNTAS Y RESPUESTAS
	var m;
	aleatorio(a);
	aleatorio(t);
	/*
	for(var i = 0; i < elementos; i++){
		caja.value = caja.value + a[i]+",";
	}
	caja.value = caja.value + " | ";
	for(var i = 0; i < elementos; i++){
		caja.value = caja.value + t[i]+",";
	}*/
	for (var i = 1; i >=0; i--){
		for (var j = 0; j < elementos; j++){
			var img = new Image();			
			// ->> CODIGO TEMPORAL - ACTUALIZAR MODO ALEATORIO
			if(i==1){
				img.src = "http://localhost/plataforma/juegos/respuesta/"+(a[j])+".png";
			}else{
				img.src = "http://localhost/plataforma/juegos/opcion/"+(t[j])+".png";
			}
			imagen[i][j] = img;
		}
	}
	
}

function aleatorio(g){
	for(var i = 0; i < elementos; i++){
		m = false;
		var n = parseInt(Math.random()*elementos)+1;
		for(var j = 0; j < g.length; j++){
			if(g[j]==n){
				i--;
				m = true;
				break;
			}
		}
		if(m==false){
			g[i] = n;
		}
	}
}
function Respuestas(){
	cv = document.getElementById('lienzo');
	cx = cv.getContext('2d');
	//Agregar objetos de prueba
	/*var posx=150;
	var posy=250;  
	*/
	var posx=20;
	var posy=900;  
	for (var i = 0; i < elementos; i++) {
		objetos[1].push({
			x: posy, y: posx,
			width: anchoE, height: altoE,
			color: '#000'
		});
		posx = posx+210;
		if(i==2){
			posx=150;
			posy=400;
		}
	}
	//actualizar(objetos);
}
function actualizar(objetos,imagen){
	//COLOR DE FONDO DEL CANVAS
	cx.fillStyle = '#94b7ef';
	cx.fillRect(0,0, 1300, 1000);
	for (var i = 1; i >=0; i--){
		for (var j = 0; j < objetos[i].length; j++){
			if (mover[j]==true) {
				//cx.fillStyle = objetos[i][j].color;
				//cx.fillStyle = imagen[i][j].color;
				//cx.fillRect(objetos[i][j].x, objetos[i][j].y, objetos[i][j].width, objetos[i][j].height); //-> Comentario
				cx.drawImage(imagen[i][j],objetos[i][j].x, objetos[i][j].y, objetos[i][j].width, objetos[i][j].height);
			}else{
				//cx.fillStyle = objetos[i][j].color;
				//cx.fillStyle = imagen[i][j].color;
				//cx.fillStyle = imagen[i][j].color;
				//cx.fillRect(objetos[i][j].x, objetos[i][j].y, objetos[i][j].width, objetos[i][j].height); //-> Comentario
				cx.drawImage(imagen[i][j],objetos[i][j].x, objetos[i][j].y, objetos[i][j].width, objetos[i][j].height);	
			}
		}
	}
}
//FUNCIONES PARA DIMENSIONES Y MOVIMIENTO DE ELEMENTOS
function posicionY(c,i){
	var p = [];
	var tmp = c.height;
	h = tmp.replace("px","");
	var posy = objetos[0][i].y;
	pyi = (h*posy)/alto;
	pyf = (h*(posy+altoE))/alto;
	p[0] = pyi;
	p[1] = pyf;
	return p;
}
function posicionX(c,i){
	var p = [];
	var tmp = c.width;
	w = tmp.replace("px","");
	var posx = objetos[0][i].x;
	pxi = (w*posx)/ancho;
	pxf = (w*(posx+anchoE))/ancho;
	p[0] = pxi;
	p[1] = pxf;
	return p;
}
function elementoX(c,mx){
	tmp = c.width;
	w = tmp.replace("px","");	
	//caja.value = "# "+p;
	//mx = mx - 100;
	//caja.value = "# "+mx;
	//posx = objetos[0][i].x;
	return ((ancho*mx)/w);
}
function elementoY(c,my){
	tmp = c.height;
	h = tmp.replace("px","");
	//posx = objetos[0][i].x;
	return ((alto*my)/h);
}
//---------------------------------------------------------------
//FUNCIONES PARA EVENTOS DE MOUSE Y TECLADO
window.onload = function(){
	var moverX,moverY;
	var pyi,pxi;
	var pyf,pxf;
	mover = [];
	objetos = [];
	imagen = [];
	//respuesta.push([]);
	//respuesta = {6,5,3,1,4,2};
	//CREAR OBJETOS	
	for (var i = 0; i < 2; i++) {
			objetos.push([]);
	}
	var pose;
	var c = getComputedStyle(lienzo);
	cv = document.getElementById('lienzo');
	cx = cv.getContext('2d');
	//Opciones a seleccionar mouse
	var pos=20;
	for (var j = 0; j < elementos; j++) {
		mover[j] = true;
		objetos[0].push({
			x: 200, y: pos,
			width: anchoE, height: altoE,
			color: '#00f'
		});
		pos = pos+210;
	}	
	Respuestas();
	imagenes(imagen);
	//Temporizador para Cargar los Elementos desde Imagenes
	setTimeout(
		function(){			
			actualizar(objetos,imagen);
		}
	,200,"JavaScript");

	function getMousePos(canvas, evt) {
	    var rect = canvas.getBoundingClientRect();
	    return {
		  x: evt.clientX - rect.left,
		  y: evt.clientY - rect.top
	    };
	}

	cv.onmousedown = function(event){
		var mp = getMousePos(cv, event);
		for (var i = 0; i < objetos[0].length; i++){
			/*
			@ Objetos
			pyi: posicion alto inicial
			pyf: posicion alto final
			pxi: posicion ancho(largo) inicial
			pxf: posicion ancho(largo) finals
			mp: mouse posicion alto y ancho(largo)
			objetos[0]: opciones a escoger
			objetos[1]: respuestas
			*/		
			var p = [];	
			p = posicionX(c,i);
			pxi = p[0];
			pxf = p[1];
			p = posicionY(c,i);
			pyi = p[0];
			pyf = p[1];
			//caja.value = mp.y+"--"+pyi+", "+pyf;
			//caja.value = mp.x+"--"+pxi+", "+(mp.x-pxi);
			if(mp.x>pxi&&mp.x<pxf&&mp.y>pyi&&mp.y<pyf){
				var s = imagen[0][i].src;
				var g = s.split("/");
				var n = g[g.length-1].replace(/.jpg|.png/,"");
				caja.value = n;
				objetoActual = objetos[0][i];
				//BUSCAR POSICION DE ELEMENTO
				for (var l = 0; l < objetos[0].length; l++) {
					var s2 = imagen[1][l].src;
					var g2 = s2.split("/");
					var n2 = g2[g2.length-1].replace(/.jpg|.png/,"");
					if(n==n2){
						pose = l;
						caja.value = "N: "+n;
						break;
					}
					
				}
				posx = objetos[0][i].x;
				posy = objetos[0][i].y;
				moverX = mp.x - pxi;
				moverY = mp.y - pyi;
				//caja.value = posx+", "+posy;
				break;
			}
		}
	};
	cv.onmousemove = function(event){
		if(objetoActual != null){
			//OBTENER LA COORDENADA DEL MOUSE EJE X Y
			var mp = getMousePos(cv, event);
			//caja.value = mp.x+", "+mp.y;
			var p = [];	
			//LLAMAR A LAS FUNCIONES PARA OBTENER LAS COORDENADAS CORRECTAS EN LA RESOLUCION ORIGINAL 1300px 620px
			p = posicionX(c,pose);
			pxi = p[0];
			pxf = p[1];
			p = posicionY(c,pose);
			pyi = p[0];
			pyf = p[1];
			//MOVER LOS ELEMENTOS ACORDE A LA POSICION DEL MOUSE
			if(mover[pose]==true){
				objetoActual.x = elementoX(c,mp.x-moverX);
				objetoActual.y = elementoY(c,mp.y-moverY);
				//caja.value = "Entrada";
				actualizar(objetos,imagen);
			}
			//POSICIONAR LA OPCION A ESCOGER EN LA RESPUESTA CORRECTA
			if(((objetoActual.x+150)>=objetos[1][pose].x&&(objetoActual.x+150)<=(objetos[1][pose].x + 150*2))&&((objetoActual.y+150)>=objetos[1][pose].y&&(objetoActual.y+150)<=(objetos[1][pose].y + 150*2))&&mover[pose]==true){
				//caja.value = "@ "+moverX;
				objetoActual.x = objetos[1][pose].x;
				objetoActual.y = objetos[1][pose].y;
				mover[pose]=false;
				actualizar(objetos,imagen);
			}
		}
	};
	cv.onmouseup = function(event){
		//VOLVER LOS ELEMENTOS A LA POSICION ORIGINAL
		if(mover[pose]==true){
			objetoActual.x = posx;
			objetoActual.y = posy;
			actualizar(objetos,imagen);

		}
		//VACIAR LA VARIABLE DEL ELEMENTO SELECCIONADO PARA LIBERAR RECURSOS
		objetoActual = null;	
	}	
};
