<?php

//Datos de entrada 

const TICKET_PRICE = 25000;
$membershipType = "";
$personNumber = 0;

//Proceso

echo "Ingrese el tipo de membresia: ";
$membershipType = strtoupper (readline ());

echo "Ingrese el número de personas: ";
$personNumber = readline ();

$totalPrice = $personNumber * TICKET_PRICE;

// Salida

switch ($membershipType) {
  case "A"; echo "el total a pagar es: ". $totalPrice*0.7;
  break;
  
  case "B"; echo "el total a pagar es: ". $totalPrice*0.85;
  break;

  case "C"; echo "el total a pagar es: ". $totalPrice*0.9;
  break;

  case "D"; echo "el total a pagar es: ". $totalPrice*0.95;
  break;
default: echo "Su Tipo de membresia no tiene descuento, el total a pagar es ". $totalPrice;
}

?>