<?php
// Datos de entrada

$firstNumber = 0;
$secondNumber = 0;
$operation = "";


//Proceso

echo "Digite el primer número:". "\n";
$firstNumber = readline ();

echo "Digite el segundo número:". "\n";
$secondNumber = readline ();

echo "Digite la operación a realizar: ". "\n";
echo "+ = Suma"."\n";
echo "- = Resta"."\n";
echo "* = Multiplicación"."\n";
echo "/ = División"."\n";
$operation = readline ();

$add = $firstNumber + $secondNumber;
$subtraction = $firstNumber - $secondNumber;
$multiplication = $firstNumber * $secondNumber;
$division = $firstNumber / $secondNumber;

//SALIDA

switch ($operation) {
  case "+": 
    echo "El resultado es: ". $add;
    break;
  case "-": 
    echo "El resultado es: ".$subtraction;
    break;
  case "*": 
    echo "El resultado es: ".$multiplication;
    break;
  case "/": 
    echo "El resultado es: ".$division;
    break;
  default: 
    echo "Los datos ingresados no son válidos";
  
}
?> 