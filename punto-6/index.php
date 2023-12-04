<?php
// Definición variables (Datos de entrada)

$name = "";
$age = 0;

//Proceso

echo "Digite su nombre y apellido:". "\n";
$name = readline ();
echo "Digite su edad:". "\n";
$age = readline ();

//Salida

if ($age >=18) {echo $name. " es mayor de edad";}  
else {echo $name. " es menor de edad";}
?>