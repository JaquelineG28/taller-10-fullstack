<?php
// Datos de entrada

$numberArray = array (10, 12, 13, 14, 15);
$add = 0;

// Proceso

 foreach ( $numberArray as $number) {
   $add = $number + $add;
 }
print_r ($numberArray);
echo "La suma total del arreglo es: ". $add;
?>