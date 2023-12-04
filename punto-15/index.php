<?php
include "operationUtils.php";

//Datos de entrada
$numberOne = 0;
$numberTwo = 0;
$option = "";

// Llamar una función para pedir un número
$numberOne = getNumber();
$numberTwo = getNumber();

// Llamar la función para mostrar el menú y obtener la opción
$option = showMenu();

// Llamar la función para realizar la operación
$result = operate($numberOne, $numberTwo, $option);

// Mostrar el resultado
echo "El resultado de la operación es: " . $result;
?>