<?php

/* Mostrar los números pares que hay del 1 al 100
*/

$var1 = 100;

for ($i = 0; $i < $var1; $i++) {
    if ($i % 2 == 0) {
        echo "$i<br>";
    }
}
