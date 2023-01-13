<?php
/* Imprimir la tabla de multiplicar del 1 al 10 en un tabla html
*/
$num1 = 1;
$num2 = 10;

echo "<table border='1'>";
echo "<tr>";
for ($i = $num1; $i <= $num2; $i++) {
    echo "<td>tabla del $i<br>";
    for ($f = 1; $f <= 10; $f++) {
        $producto = ($i * $f);
        echo "$i * $f = $producto<br>";
    }
    echo "</td>";
}
echo "</tr>";
echo "</table>";
