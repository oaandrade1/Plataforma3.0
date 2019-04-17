<!DOCTYPE html>
<!--http://www.lawebdelprogramador.com-->
<html>
<head>
    <meta charset="utf-8">
        <link rel="shortcut icon" href="/TESIS/imagenes/iconoweb.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/estiloCajas.css">
</head>
<body>
<form action="sumarImagenes.php" method="POST">
    <?php
echo "
 <div align='center'>
        <h3>SUMAR</h3>
      
        <table border='0'>
            <tr>
                <td>
                <input type='hidden' name='imag1' id='num' value='2'> 
                <img src='Imagenes/leon2.png' title='Leon'>
                </input>
                </td>
                <td><h1>+</h1></td>
                <td>
                 <input type='hidden' name='imag2' id='num' value='1'> 
                 <img src='Imagenes/leon1.png'>
                 </input>
                 </td>
                <td><h1>=</h1></td>
                <td>
                   <select name='pg1'>
                        <option value='1'>1</option>
                        <option value='3'>3</option>
                        <option value='4'>6</option>
                    </select>
                </td>
                
            </tr>
        </table>

";
$result= $_POST['pg1'];
$num1= $_POST['imag1'];
$num2= $_POST['imag2'];
//echo "comprobar: ".$result;
        $suma=$num1+$num2;
        //echo "la suma es: ".$suma;
        if ($suma==$result) {
            echo "CORRECTO";
        }else{
            echo "INCORRECTO";
        }


echo "
 <div align='center'>
        <h3>SUMAR</h3>
      
        <table border='0'>
            <tr>
                <td>
                <input type='hidden' name='imag3' id='num' value='1'> 
                <img src='Imagenes/perro.png'>
                </input>
                </td>
                <td><h1>+</h1></td>
                <td>
                 <input type='hidden' name='imag4' id='num' value='1'> 
                 <img src='Imagenes/perro.png'>
                 </input>
                 </td>
                <td><h1>=</h1></td>
                <td>
                   <td><input type='text' name='num' id='num'>   
                </td>
                
            </tr>
        </table>
</div>
";
$result= $_POST['num'];
$num1= $_POST['imag3'];
$num2= $_POST['imag4'];
//echo "comprobar: ".$result;
        $suma=$num1+$num2;
        //echo "la suma es: ".$suma;
        if ($suma==$result) {
            echo "CORRECTO";
        }else{
            echo "INCORRECTO";
        }

 ?>
 <input type='submit' name='verificar' value='Verificar'>
</body>
</form>
</html>