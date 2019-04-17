<!DOCTYPE html>
<html>
<head>
	<title>ZOOM</title>



<!---------------JQUERY-------------->
<script src="/plataforma/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/plataforma/js/jquery.mlens-1.2.min.js"></script>



<!-------------CSSS------------->

<style type="text/css">
#contenido {
    position: relative;
    width: 640px;
    height: auto;
    margin: 20px auto;
    border: 12px solid #fff;
    border-radius: 10px;
    box-shadow: 1px 1px 5px rgba(50,50,50 0.5);
}
</style>

</head>
<body>

<!-----------------HTML-------->
<div id="contenido">
   <img id="botella" src="/plataforma/imagenes/fp.png" alt="botella con zoom" data-big=/plataforma/imagenes/fg.png" data-overlay="/plataforma/imagenes/mp11.png" />
</div>


<!--------JS------------->
<script type="text/javascript">
$(document).ready(function()
{
    $("#botella").mlens(
    {
        imgSrc: $("#botella").attr("data-big"),   // path of the hi-res version of the image
        lensShape: "circle",                // shape of the lens (circle/square)
        lensSize: 180,                  // size of the lens (in px)
        borderSize: 4,                  // size of the lens border (in px)
        borderColor: "#fff",                // color of the lens border (#hex)
        borderRadius: 0,                // border radius (optional, only if the shape is square)
        imgOverlay: $("#botella").attr("data-overlay"), // path of the overlay image (optional)
        overlayAdapt: true // true if the overlay image has to adapt to the lens size (true/false)
    });
});
</script>


</body>
</html>