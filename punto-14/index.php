<?php

include "./passwordCheck.php";

// Datos de entrada

$user = "";
$password = "";

// Proceso
echo "Digite su usuario: ". "\n";
$user = readline();

echo "Digite su contraseña: ". "\n";
$password = readline ();

if (hasSecurityLong ($password)) {
  echo "Su contraseña tiene una longitud valida \n";
  if (hasUpperLetter ($password)) {
    echo "Su contraseña tiene una letra mayuscula   \n";
    if (hasNumber ($password)) {
      echo "Felicitaciones su contraseña es segura y quedo registrada \n";
    }  else { 
      echo "Su contraseña no cumple con un numero \n";
    } 
  } else { 
  echo "Su contraseña no cumple con letras mayusculas \n";
  }
} else { 
  echo "Su contraseña no cumple con la longitud \n";
}

?>