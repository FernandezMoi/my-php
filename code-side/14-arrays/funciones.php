<?php

$cantantes = ['2pac', 'Eminem', 'Blake'];

asort($cantantes); // arsort->inverso, sort->números

var_dump($cantantes);
echo "<br/><br/>";
// Añadir elementos array

$cantantes[] = 'Paradox';
array_push($cantantes, 'Paul'); //Añadir al array buena practica

array_pop($cantantes); //Eliminar último índice
unset($cantantes[2]); //Eliminar índice enviado

var_dump($cantantes);

echo "<br/><br/>";

//Elemento aleatorio
$indice = array_rand($cantantes);

echo $cantantes[$indice];

echo "<br/><br/>";

//Invertir array

var_dump(array_reverse($cantantes));

echo "<br/><br/>";

//Buscar en array
$result = array_search('Eminem', $cantantes);
if ($result != false) {
    echo $result;
} else {
    echo "No existe esa clave en el array";
}

echo "<br/><br/>";

//Contar número de elementos
echo count($cantantes) . "<br/>";
echo sizeof($cantantes);
