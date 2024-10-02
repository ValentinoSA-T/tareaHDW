<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluacion estudiantes</title>
    
    

</head>



<body>
    <center><h1>Formulario de beneficiarios Chip 2024-II</h1></center>
    <form action="p_evaluacionchip.php" method="post">
    
    <table id="12" align="center" border="1">
        <tr>
            <td><center>nombre</center></td>
            <td>
               <input class="control" type="text" name="txtnombre" required autocomplete="off" >
                          
            </td>
        </tr>
        <tr>
            <td><center>apellidos</center></td>
            <td>
              <input class="control" type="text" name="txtapellido" required autocomplete="off" >

            </td>
        </tr>
        <tr>
            <td><center>celular</center></td>
            <td>
                <input class="control" type="text" name="txtcelular" required autocomplete= "off" >
            </td>
        </tr>
        <tr>
            <td><center>correo</center></td>
            <td>
                <input class="control" type="email" name="txtemail" required autocomplete="off" >
            </td>
        </tr>
        <tr>
            <td><center>escuela</center></td>
            <td>
                <input class="control" type="text" name="txtescuela" required autocomplete="off">

            </td>
        </tr>
        <tr>
            <td><center>Fecha-nacimiento</center></td>
            <td>
               <input type="date" value="2024-09-28" min="1960-01-01" name="txtfecha" required autocomplete="off" class="control">

            </td>
        </tr>
        <tr>
            <td><center>Cuenta con Internet</center></td>
            <td>
            <input type="radio"  name="opcint" value="0">Si
            <input type="radio" name="opcint" value="5"> NO

            </td>
        </tr>
        <tr>
            <td><center>Tipo de Vivienda</center></td>
            <td>
            <input type="radio"  name="opcvivi" selected value="1" > Propia
            <input type="radio" name="opcvivi" value="3"> Alquilada
            <input type="radio" name="opcvivi" value="5"> de un familiar
            </td>
        </tr>
        <tr>
            <td><center>Cuenta con celular</center></td>
            <td>
            <input type="radio" name="opcel" value="5"> Si
            <input type="radio" name="opcel" value="0"> No

            </td>
        </tr>
        <tr>
            <td><center>Ingreso economico mensual</center></td>
            <td>
            <input type="radio" name="opcingmensual" value="5"> menos de s/1000
            <br> 
            <input type="radio" name="opcingmensual" value="3"> entre s/1000-s/3000
            <br>
            <input type="radio" name="opcingmensual" value="1"> entre s/3000-s/6000
            <br>
            <input type="radio" name="opcingmensual" value="0"> mas de s/6000
            </td>
        </tr>
        <tr>
            <td><center>Actualmente usted:</center></td>
            
            <td>
            <input type="radio" name="opcsituacion" value="5"> solo estudiando
            <br>
            <input type="radio" name="opcsituacion" value="3"> en trabajos eventuales
            <br>
            <input type="radio" name="opcsituacion" value="0"> trabajo fijo
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Guardar datos">
            </td>
        </tr>
    </table>


</body>
</html>