
<?php

//Datos de entrada

$number = 0;

//Proceso

echo "Digite el numero a multiplicar:". "\n";
$number = readline ();

for ($i=0; $i<=30; $i++) {
    $result = $number*$i;
  echo $number. " x ".$i. " = ".$result. "\n";  
}
?>