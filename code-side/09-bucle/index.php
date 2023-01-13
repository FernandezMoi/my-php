<?php

// BUCLE WHILE
/*
Estructura de control que itera o repite la ejecución de una serie de 
instrucciones las veces que sea necesario en base a la condición del bucle

    while(condicion){
        bloque de instrucciones
        otras instrucciones
    }
*/

// EJEMPLO 1-4-Es el test dde fetch/pull
$num = 0;
while ($num <= 100) {
    echo  "$num, ";
    $num++;
}

echo "<hr>";
echo "<br>";
//Ejemplo DO-WHILE
$edad = 17;
$edad2 = 18;
$contador = 1;
do {
    echo "Tienes acceso a la fiesta $contador<br>";
    $contador++;
} while ($edad2 >= 18 && $contador <= 10);
echo "<hr>";
echo "<br>";
