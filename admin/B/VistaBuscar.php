<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Vistas</title>
		<link rel="stylesheet" href="Css/css.css">
		<script src="Script/Script.js"></script>
	</head>
	<body>

	<div class="margen">
        <div class="buscar">
            <p>
                <label>BUSCAR:</label>
                <input class="color" type="text" name="buscar" id="buscar" placeholder="Buscar por: Cédula Nombre o Apellido" style="width: 400px" onkeyup="loadXMLDoc()" required />
            </p>
            <script type="text/javascript">
                function loadXMLDoc(){
                    var xmlhttp;
                    var n=document.getElementById('buscar').value;
                    if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp=new XMLHttpRequest();
                    }
                    else{// code for IE6, IE5
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange=function(){
                        if (xmlhttp.readyState==4 && xmlhttp.status==200){
                            document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("POST","buscar.php",true);
                    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                    xmlhttp.send("q="+n);
                }
                loadXMLDoc();
            </script>
                    <div id="myDiv"></div>    

        </div>  
    </div>
	</body>
</html>