<?php

// Operadores aritméticos

$num1 = 43;
$num2 = 22;

echo 'Suma: ' . ($num1 + $num2) . '<br>';
echo 'Resta: ' . ($num1 - $num2) . '<br>';
echo 'Multiplicación: ' . ($num1 * $num2) . '<br>';
echo 'División: ' . ($num1 / $num2) . '<br>';
echo 'Resto: ' . ($num1 % $num2) . '<br><br>';

//Operadores de incremento y decremento

$year = 2022;
echo 'Año <h1>' . $year . '</h1>';

//$year = $year + 1 
++$year;
echo 'Incremento uno <h1>' . $year . '</h1>';

//$year = 1 - $year
--$year;
echo 'Decremento uno <h1>' . $year . '</h1>';

$edad = 23;
echo $edad . '<br>';

//$edad = $edad + 5
echo ($edad += 5);
