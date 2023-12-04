<?php

// Datos de entrada

$sum = 0;

// Proceso

for  ( $i = 1; $i <= 100; $i=$i +2) {
  echo $i . "\n";
  $sum = $sum + $i;
}

echo "La suma de todos los numeros es: ". $sum;
?> 