<?php
// funcion para obtener un numero

function getNumber(){
  echo "Ingrese un numero para operar: \n";
    return readline();
}
// funcion para mostrar menu y retornar respuesta
function showMenu(){
  echo "Ingrese la opción para la operación que va a realizar siendo: \n";
  echo "1. Suma \n";
  echo  "2. Resta \n";
  echo  "3. Multiplicación \n";
  echo  "4. División \n";
  return readline();
}
  
// funcion para que realice la operación correcta

  function operate ($x, $y, $option){
    switch ($option){
      case 1:
        return add ( $x, $y);
      case 2: 
        return sub ( $x, $y);
      case 3:
        return dot ( $x, $y);
      case 4:
        return  split ( $x, $y);
      default:
        echo "Opción no válida";
        return 0;
    }
  }
// funciones por cada operacion
    function add ($x, $y){
        return $x + $y;
    }

    function sub ($x, $y){
      return $x - $y;
    }

    function dot ($x, $y){
      return $x * $y;
    }

    function split ($x, $y){
      return $x / $y;
    }
?>