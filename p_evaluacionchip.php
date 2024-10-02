<?php 

$nom=$_POST["txtnombre"];
$apell = $_POST["txtapellido"];
$celular=$_POST["txtcelular"];
$correo=$_POST["txtemail"];
$esc=$_POST["txtescuela"];
$fecha=$_POST["txtfecha"];
$inter=$_POST["opcint"];
$vivi=$_POST["opcvivi"];
$ingreso=$_POST["opcel"];
$IngMen=$_POST["opcingmensual"];
$Poscion=$_POST["opcsituacion"];


$nom=trim(ucwords(strtolower($nom)));
$apell=trim(ucwords(strtolower($apell)));
$correo=trim(strtolower($correo));




// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el valor de opcint
    $total = 0;
    if (isset($_POST["opcint"])) {
        $inter = intval($_POST["opcint"]);
        
        // Si el valor de opcint es 0, establecer todo a 0
        if ($inter == 0) {
                     // Total se establece a 0
            $vivi = 0;
            $ingreso = 0;
            $IngMen = 0;
            $Poscion = 0;
            
        } else {
            $total += $inter; // Solo sumar si no es 0
        }
    }

    // Sumar valores de los otros grupos de radio buttons
     if ($inter!=0) {
        if (isset($_POST["opcvivi"])) {
            $vivi = intval($_POST["opcvivi"]);
            $total += $vivi; // Sumar solo si hay un valor válido
        }
        
     }
    if ($inter!=0) {
        if (isset($_POST["opcel"])) {
            $ingreso = intval($_POST["opcel"]);
            $total += $ingreso; // Sumar solo si hay un valor válido
        }
    }
    
    if ($inter!=0) {
        if (isset($_POST["opcingmensual"])) {
            $IngMen = intval($_POST["opcingmensual"]);
            $total += $IngMen; // Sumar solo si hay un valor válido
        }
    }
    
    if($inter!=0){
        if (isset($_POST["opcsituacion"])) {
            $Poscion = intval($_POST["opcsituacion"]);
            $total += $Poscion; // Sumar solo si hay un valor válido
        }
    }

    echo "El total es: " . $total;
}

$beneficiario="";
if ($total>15) {
    $beneficiario = "Si";
}else{
    $beneficiario = "NO";
}


$archivo = fopen("registro.xls","a+");


$registro = $nom . "\t" . $apell . "\t" . $celular . "\t" . $correo . "\t" . $esc . "\t" . $fecha . "\t" . $inter . "\t" . $vivi . "\t" . $ingreso . "\t" . $IngMen . "\t" . $Poscion . "\t" . $total . "\t" . $beneficiario . "\n";


fwrite($archivo,$registro);



fclose($archivo);

header('location:index.php');
?>