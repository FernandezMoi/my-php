<?php

/* Mostrar los números elevado al cuadrado del 1 al 40
*/

//con  while
$var1 = 40;
$i = 1;
while ($i <= $var1) {
    $cuadrado = $i * $i;
    echo "$i elevado al cuadrado es: $cuadrado<br>";
    $i++;
}
//con for
echo "SEPARADOR EJERCICIO CON BUCLE FOR<br>";
for ($i = 1; $i < 40; $i++) {
    $cuadrado = $i * $i;
    echo "$i elevado al cuadrado es: $cuadrado<br>";
}
