/**
 * version mobile
 * 
 */
function gObj(p){
  return  document.getElementById(p);
}

/* Para juegos como en js */
var st="";
var sp="";
var sr="";

var arrayPreguntas;
var lenArrayPreguntas;
var arrayRespuestas;
var lenArrayRespuestas;

/* fin Para juegos como en js */

var dspmnu;
var divCabecera;
var menusup;
var lHome;

var preg;
var btn1;
var btn2;
var btn3;
var btn2;
var resp1;  
var resp2;

var intentos;
var aciertos;
var fallos;

var num_intentos=0;
var num_aciertos=0;
var num_fallos=0;

var codG="", cf_code="", nota=0, saved=false;

var contPreguntas;

var lstR=Array();
var aposibles;
window.onload=function(){
  
  //alert("Cargado mobi.js!");
  mlog("Cargado mobi_game matematicas.js!");
  
  //Iniciamos
  //gObj("pnlMarcador").innerHTML=pintarPanelAciertos_mv();
  
  intentos=gObj("intentos");
  aciertos=gObj("aciertos");
  fallos=gObj("fallos");
  
}

/*
 * myLink.setAttribute("href", "MÃ©xico, PerÃº, MarÃ­a and any other words with accents and spaces");
and then assign the href value to a variable, like this:

var theLink = myLink.getAttribute("href");
 */
var btnOk;
var btnPuls;

function btn_click(e){
  var e = e || window.event;
  
 mlog("pulsaste " + e.target.id);
 mlog( e.target || e.srcElement);
 mlog(e.id);
 
 btnOk="btn" + respCorrecta;
 mlog("btnOk " + btnOk);
 mlog("respCorrecta " + respCorrecta);
 
 btnPuls=e.target.id;
 
 if(btnPuls == btnOk){
   // lstR.push("<span class='ok'>" + arrayRespuestas[numPreg-1] + "</span>");
   lstR.push("<li>" + arrayRespuestas[numPreg-1] + "</li>");
   
   //alert("Correcto!");
   mlog("Correcto!");
   incA();
   preguntar();
   
 }else{
   // lstR.push("<span class='err'>" + arrayRespuestas[numPreg-1] + "</span>");
   // lstR.push("<li class='err'>" + arrayRespuestas[numPreg-1] + "</li>");
   lstR.push("<li >" +
    "<span>" + arrayPreguntas[numPreg-1] + "</span>" +
    " -> <span class='err'>" + e.target.innerHTML + "</span>" +
    " -> <span>" + arrayRespuestas[numPreg-1] + "</span></li>");

   
   //alert("False que eres un false!");
   //mlog("False que eres un false!");
   
   incF();
   preguntar();
   
 }
  
}

var num_intentos =0;
var num_fallos =0;
var num_aciertos =0;

var numPreg=0;
var respCorrecta=0;

var iter=0;
var pal;
var num_preguntas = 0;
function preguntar(){
  
    if(numPreg<num_preguntas){

      contPreguntas.innerHTML=(numPreg+1) + " de " + num_preguntas;
      
      //mlog("Preguntamos: " + numPreg);
      pal = arrayPreguntas[numPreg];
      
      preg.innerHTML = pal;
      
      mlog(arr_misposibles);

      var rOk  = arr_misposibles[numPreg].rdoOK;
      var num1 = arr_misposibles[numPreg].n1;
      var num2 = arr_misposibles[numPreg].n2;
      var num3 = arr_misposibles[numPreg].n3;
      
      var v1,v2,v3;
      
      mlog("************************************");

      mlog("rOk: " + rOk);
      mlog("Pregunta: " + numPreg);
      var repu = arrayRespuestas[numPreg];
      mlog("Respuesta: " + repu);
      mlog("rdo: " + arr_misposibles[numPreg].ok);

      //
      var _tmp = aposibles2.concat();
      
      // var vOk = "*" + repu;
      var vOk = _tmp[rOk];
      v1 = _tmp[num1];
      v2 = _tmp[num2];
      v3 = _tmp[num3];
      
      if( (v1 == v2 || v1 == v3 || v1 == vOk) || (v2 == v3 || v2 == vOk)|| (v3 == vOk) )
      {
        alert("Resp: Duplicadas");
      }
     
      // document.getElementById("btn" + rOk).innerHTML = "* "  +vOk;

      var pos1 = newarray[numPreg][0];
      var pos2 = newarray[numPreg][1];
      var pos3 = newarray[numPreg][2];
      var pos4 = newarray[numPreg][3];

      var field = "btn" + rOk;
      mlog("field: " + field);

      // eval(field).innerHTML = vOk;
      eval("btn" + pos1).innerHTML = vOk;
      eval("btn" + pos2).innerHTML = v1;
      eval("btn" + pos3).innerHTML = v2;
      eval("btn" + pos4).innerHTML = v3;

      respCorrecta = pos1;

      mlog("vOk: "  + pos1 + " valor:" + vOk);
      mlog("num1: " + pos2 + " valor:" + v1);
      mlog("num2: " + pos2 + " valor:" + v2);
      mlog("num3: " + pos4 + " valor:" + v3);
      
    }
    
    numPreg++;
    
    //if(numPreg>lenArrayPreguntas){
    
    if(numPreg>num_preguntas){
      //alert("Juego terminado");

      //var nota=(num_aciertos*10/lenArrayRespuestas)-(num_intentos-lenArrayRespuestas)*10/lenArrayRespuestas;
      nota=(num_aciertos*10/num_preguntas);

      mlog("num_aciertos: " + num_aciertos);
      mlog("num_intentos: " + num_intentos);
      mlog("num_preguntas: " + num_preguntas);

      var rdo="";
      for(var i=0;i<lstR.length;i++){
      	mlog(i + " ->"+lstR[i]);
      	rdo+=lstR[i];
      }

      var pie ='<div class="endGameF"><a href="javascript:location.reload();">Jugar otra vez</a></div>';

      rdo = '<div id="endGame"><h3>Nota: ' + nota + '</h3><ul>' + rdo + '</ul>' + pie + '</div>';

      // rdo+="<h5 onclick='location.reload();'>Jugar otra vez</h5>";

      preg.style.display='none';
      gObj("divR").style.display='none';
      
      // gObj("respRdo").innerHTML="<h5>Juego Terminado **</h5>" + rdo;
      gObj("respRdo").innerHTML= rdo;
      gObj("contPreguntas").innerHTML="";
      //gObj("contPreguntas").innerHTML="<h5 onclick='location.reload();'>Jugar otra vez</h5>";
      
      gObj("respRdo").style.display='block';

      grabarRdo();
    }
}

function getRnd(max){
  //return Math.floor((Math.random() * 10) + 1);
  //return Math.floor((Math.random() * max) + 1);
  return Math.floor((Math.random() * max));
}

function pintarPanelAciertos_mv() {
  var tabla = "" +
  "<div class='classAci'>Aciertos</div><div class='classFa'>Fallos</div>" +
  "<div id='aciertos'>0</label><div id='fallos'>0</label>" +
  "";
  return tabla;
}

function incA() {
  num_aciertos++;
  aciertos.innerHTML = num_aciertos;
}
function incF() {
  num_fallos++;
  fallos.innerHTML = num_fallos;
}

function loadComp(){
  preg=gObj("preg");
  contPreguntas=gObj("contPreguntas");
  
  btn1=gObj("btn1");
  btn1.addEventListener("click", btn_click);
  
  btn2=gObj("btn2");
  btn2.addEventListener("click", btn_click);
  
  btn3=gObj("btn3");
  btn3.addEventListener("click", btn_click);

  btn4=gObj("btn4");
  btn4.addEventListener("click", btn_click);
  
  var tit=gObj("tit");
  tit.innerHTML=st;

  arrayPreguntas = sp.split("|");
  lenArrayPreguntas = arrayPreguntas.length;
  arrayRespuestas = sr.split("|");
  lenArrayRespuestas = arrayRespuestas.length;
  
  //alert("lecc" + juego);
}

function init_mv(c){
  //alert("Cargamos " +c );
  cvl(c);
  //alert(st);
  loadComp();

  // alert("here we are!");
  //load respuestas posibles
  // ldrespuestas();
  num_preguntas = 8;
  
  preguntar();
  codG=c;
  
}

function mlog(m) {
  var produ = true;
  if(!produ) {
    console.log(m);
  }

}

//var arr_misposibles = [];
function grabarRdo(){
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {saved=true;}};
if(!saved){
if(!cf_code) {cf_code = juego;}
var url="https://www.gesdatabase.com/labs/eae/grabarpuntuacion.php?juego=" + codG +
"&leccion=" + cf_code +  "&intentos=0&aciertos=" + num_aciertos + "&fallos=" + num_fallos + "&nota=" + nota + "&tipo=M";
// console.log(url);
xhttp.open("GET", url, true);
xhttp.send();
}
}