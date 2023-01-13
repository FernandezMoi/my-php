<?php

/*
Ejercicio 3. Programa que compruebe si una variable está vacía y si está vacía, rellenarla
con texto en minúsculas y mostrar en mayúsculas y negrita
*/

$texto = "";

if (empty($texto)) {
    $texto = "texto en mins";
    echo "<strong>" . strtoupper($texto) . "</strong>";
} else {
    echo "No está vacía";
}
