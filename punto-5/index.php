<?php
 //Ingreso de datos

$tipoAfiliacion = "";
$numeroPersonas = "";
const ENTRADA = 25000;
const DESCUENTO = 0.30;

//Proceso

echo "Ingrese el tipo de afiliación: ". "\n";
$tipoAfiliacion = strtoupper (readline ());
echo "Ingrese el número de personas: ". "\n";
$numeroPersonas = readline ();

$total = ENTRADA * $numeroPersonas;
$totalConDescuento = $total - ($total * DESCUENTO);

echo "El total a pagar es:". "\n";
  if ($tipoAfiliacion == "A" || $tipoAfiliacion == "B") {echo $totalConDescuento;} 
  else { echo $total;}
?>
