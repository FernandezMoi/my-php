<?php

/*
Ejercicio 1. Hacer un programa en PHP que tenga un array con 8 números enteros
y que haga:
-Recorrerlo y mostrarlo
-Ordenarlo y mostrarlo
-Mostrar longitud
-Buscar algún elemento
*/

$numbers = [23, 16, 74, 83, 39, 3, 99, 21];

//Función mostrar array ya que lo usaremos dos veces, buena práctica
function mostrarArray($numbers)
{
    $result = "";
    foreach ($numbers as $number) {
        $result .= "$number<br/>";
    }
    $result .= "<hr>";
    return $result;
}



echo "<h1>Recorrer y mostrar</h1>";
echo mostrarArray($numbers);


echo "<h1>Ordenar y mostrar</h1>";
sort($numbers);
echo mostrarArray($numbers);


echo "<h1>Mostrar longitud</h1>";
$long = sizeof($numbers);
echo "La longitud del array es: $long<br/><hr>";

if (isset($_GET['numero'])) {
    $busqueda = $_GET['numero'];
    echo "<h1>Buscar elemento $busqueda</h1>";

    $search = array_search($busqueda, $numbers);

    if (!empty($search)) {
        echo "La busqueda del array está en el índice: $search <br/>";
    } else {
        echo "No se ha encontrado la busqueda en el array";
    }
}
