<?php

// Abrimos el archivo CSV
$archivo = fopen("registro.xls", "r");

echo '<table align="center" border="1" cellspacing="0" cellpadding="5" bgcolor="lightyellow">';
echo '<tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Celular</th>
        <th>Correo</th>
        <th>Escuela</th>
        <th>Fecha</th>
        <th>Internet</th>
        <th>Vivienda</th>
        <th>Cuenta con celular</th>
        <th>Ingreso</th>
        <th>Usted esta actualmente</th>
        <th>TOTAL</th>
        <th>BENEFICIARIO</th>
      </tr>';
            $contadorBeneficiariosSi = 0;
$contadorBeneficiariosNo = 0;

// Leemos línea por línea del archivo CSV
while (($datos = fgetcsv($archivo, 1000, "\t")) !== FALSE) {
    echo '<tr>';
    // Mostramos cada celda de la fila en la tabla
    foreach ($datos as $celda) {
        echo '<td>' . htmlspecialchars($celda) . '</td>';
    }
    echo '</tr>';

    if (isset($datos[12]) && $datos[12] === "Si") {
        $contadorBeneficiariosSi++;
    } elseif (isset($datos[12]) && $datos[12] === "NO") {
        $contadorBeneficiariosNo++;
    }
}

echo '</table>';

// Cerramos el archivo
fclose($archivo);

echo '<div align="center" style="margin-top: 20px;">';
echo '<h3>Resultados:</h3>';
echo '<p>Total de alumnos : ' . $contadorBeneficiariosNo+$contadorBeneficiariosSi . '</p>';
echo '<p>Total Beneficiarios "SI": ' . $contadorBeneficiariosSi . '</p>';
echo '<p>Total Beneficiarios "NO": ' . $contadorBeneficiariosNo . '</p>';
echo '</div>';
?>






<?php