<?php

/*
Escribir un programa con PHP que añada valores a un array mientras que su longitud
sea menor a 120 y luego mostrarlo pon pantalla
*/

$numbers = array(2, 23, 41);

for ($i = 0; count($numbers) < 120; $i++) {
    array_push($numbers, $i);
}
$result = '';
foreach ($numbers as $number) {
    $result .= "$number<br/>";
}
echo $result;
