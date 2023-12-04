<?php
//Datos de entrada

$number = 0;
$numberMult = 0;

//Proceso

echo "Ingrese un numero para ver su tabla de multiplicar hasta el número 30: "; $numberMult = readline ();

//Salida

while($number <= 30){
    echo $numberMult." x ".$number." = ".$numberMult*$number."\n";      
   $number++;
}

?>