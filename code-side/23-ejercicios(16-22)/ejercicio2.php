<?php

/* Usar función
   Validar email con filter_var 
   Recoger variable por get y validar
   Mostrar resultado
*/

function validateEmail($email)
{
    $status = "No válido";
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $status = "El email es válido";
    }
    return $status;
}

if (isset($_GET['email'])) {
    echo validateEmail($_GET['email']);
} else {
    echo "Pasa por GET un email";
}
