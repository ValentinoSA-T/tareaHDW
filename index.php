<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="CSS/esstiloindex.css">
    
</head>
<body>
    <img src="faustino.jpg" alt="">
    <table id="tablet" align="center" border="1">
    <tr align ="center" border="0" >
        <td><?php include("evaluacionchip.php");?></td>
    </tr>
    <tr>
        <td><?php include("resultados.php");?></td>
    </tr>
 </table>
 <img src="" alt="">

 <div align="center" style="margin-top: 20px;">
        <a href="registro.xls" download="registro.xls">
            Descargar Excel
        </a>
    </div>
    
</body>
</html>