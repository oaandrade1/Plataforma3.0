
<?php
    require('Conexion.php');
    $id_documento = $_GET['id'];
	$sql = "SELECT * FROM documentos WHERE id_documento='$id_documento'";
	$result = $conexion->query($sql);
	$row=$result->fetch_assoc();//Ojo
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<title>Actualizar</title>
        <link rel="stylesheet" href="Css/css.css">
        <script src="Script/Script.js"></script>
    </head>
    <body>	
        <br><br>
        <div class="centrar">
            <div class="panel-rojo">
                <div class="panel-header">
                    <strong>ACTUALIZAR DATOS</strong>
                </div>
                <form  method="POST" action="ActualizarD.php">
                    <table class="tabla txt16">
                        <tbody>
                                <tr> 
                                     <td style="vertical-align: middle">
                                        <label for="txtid">Id documento</label>
                                    </td>
                                    <td >
                                        <input  type="text" name="txtid" id="txtid" value="<?php echo $row['id_documento'];?>" style=" width: 196px;" readonly >
                                    </td>
                                     <tr>
                                    <td style="vertical-align: middle;">
                                        <label for="txttitulo" >Titulo:</label>
                                    </td>
                                    <td >
                                        <input type="text" name="txttitulo" id="txttitulo" value="<?php echo $row['titulo'];?>" style=" width: 196px;" placeholder="Insertar título" required>
                                    </td>
                                   
                                    <td style="vertical-align: middle">
                                        <label for="txtdescripcion">Descripción:</label>
                                    </td>
                                    <td >
                                        <input  type="text" name="txtdescripcion" id="txtdescripcion" value="<?php echo $row['descripcion'];?>" style=" width: 196px;" placeholder="Insertar descripción" required>
                                    </td>
                                </tr>
                                
                            </tbody>
                    </table>   
                    <div >
                        <table class="tabla2 centrar">
                            <tbody>
                             <td class="sinbordes" style="text-align: center"><button type="button" class="boton-cancelar" onclick="window.location.href='vistabuscarDoc.html'">Cancelar</button></td>
                             <td class="sinbordes" style="text-align: center"><button type="submit" class="boton" value="<?php echo $row['cedula'];?>">Modificar</button></td>
                                
                            </tbody>
                        </table>
                    </div>
                </form>   
            </div>     
        </div>
    </body>
</html>
